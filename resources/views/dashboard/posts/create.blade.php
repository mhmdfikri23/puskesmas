@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Post</h1>
</div>

<div class="col-lg-8">
    <form action="/dashboard/posts" method="post" class="mb-5" enctype="multipart/form-data">
        @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Judul Postingan</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" autofocus>
        @error('title')
              <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
      </div>

      <div class="mb-3">
        <label for="slug" class="form-label">Url Post</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="Url Post harus unik" name="slug" value="{{ old('slug') }}">
        @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
      </div>

      <div class="mb-3">
        <label for="category" class="form-label">Kategori</label>
       <div class="mb-3">
        <select class="form-select @error('category_id') is-invalid @enderror" name="category_id" required">
          <option selected disabled>Pilih Kategori</option>
          @foreach ($categories as $category)
          @if (old ('category_id') == $category->id)
          <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
          @else
           <option value="{{ $category->id }}">{{ $category->name }}</option>   
          @endif
          @endforeach
        </select>
      </div>

    <div class="mb-3">
      <label for="image" class="form-label">Masukan Gambar</label>
      <img class="img-preview img-fluid mb-3 col-sm-5">
      <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
      @error('image')
              <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
    </div> 

      <div class="mb-3">
        <label for="body" class="form-label">Isi Posting</label>
        <input id="body" type="hidden" name="body" value="{{ old('body') }}">
        <trix-editor input="body"></trix-editor>
        @error('body')
              <p class="text-danger">{{ $message }}</p>
              @enderror
      </div>


      <button type="submit" class="btn btn-primary"><span data-feather="plus-circle"></span> Buat Post</button>
    </form>

</div>

<script>
  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');

  title.addEventListener("keyup", function() {
  let preslug = title.value;
  preslug = preslug.replace(/ /g,"-"); 
  slug.value = preslug.toLowerCase();
  });

  // title.addEventListener('change', function (){
  //   fetch('/dashboard/posts/checkSLug?title=' + title.value)
  //   .then(response => response.json())
  //   .then(data => slug.value = data.slug)
  // });

    document.addEventListener('trix-file-accept', function(e){
      e.preventDefault();
    })

      function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function (oFREvent){
          imgPreview.src = oFREvent.target.result;
        }
      }

      // const blob = URL.createObjectURL(image.files[0]);
      // imgPreview.src = blob;
  
</script>

@endsection
