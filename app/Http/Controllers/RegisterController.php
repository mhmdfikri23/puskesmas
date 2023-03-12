<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use Illuminate\Support\Facades\Hash; //fitur enskripsi laravel

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        // return $request->all();
        //    'name' => 'required|min:5|max:255|alpha',
        //    'username' => 'required|min:5|max:255'
        // 'username' => ['required', 'min:3', 'max:255', 'unique:users'],
         $validateData = $request->validate([
            'name' => 'required|Min:3|Max:255',
            'username' => 'required|Min:3|Max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validateData['password'] = bcrypt($validateData['password']);
        // $validateData['password'] = Hash::make($validateData['password']); //fitur enskripsi laravel

        User::create($validateData); 

        // dd('Registrasi Berhasil'); //ngecek data udah masuk apa blom
        return redirect('/login')->with('status','Akun Anda Berhasil di Buat, Silahkan Login');
    }
}
