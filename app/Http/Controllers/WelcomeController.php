<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello(){
        return "Hello World";
    }

    public function greeting(){
        return view('blog.hello')
        ->with ('name', 'Yusufa Haidar')
        ->with ('occupation', 'Mahasiswa SIB-3A');
    }
}
