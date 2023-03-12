@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Register New Account</h1>
            {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">  <!--logo--> --}}

          <form action="/register" method="post">
            @csrf
            <div class="form-floating">
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama Lengkap" value="{{ old('name') }}" required>
              <label for="name">Nama Lengkap</label>
              @error('name')
               <div class="invalid-feedback">
                 {{ $message }}
             </div>
             @enderror
            </div>

            <div class="form-floating">
              <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="User Name" required value="{{ old('username') }}">
              <label for="username">User Name</label>
               @error('username')
               <div class="invalid-feedback">
                 {{ $message }}
             </div>
             @enderror
            </div>

             <div class="form-floating">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
              <label for="email">Email address</label>
               @error('email')
               <div class="invalid-feedback">
                 {{ $message }}
             </div>
             @enderror
            </div>

            <div class="form-floating">
              <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required value="{{ old('password') }}">
              <label for="password">Password</label>
               @error('password')
               <div class="invalid-feedback">
                 {{ $message }}
             </div>
             @enderror
            </div>

            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit" ><i class="bi bi-person"></i> Register </button>
          </form>
          <small class="d-block text-center mt-3">
            <a href="/login" class="text-decoration-none"> Let's Login!</a>
          </small>
        </main>
        
    </div>
</div>
    



@endsection