<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $name = 'Ujjwal Adhikari';
        $description = 'I m a web developer specializing in creating beautiful and functional websites.';
        return view('contents.home',
        [
            'name'=>$name,'description'=>$description
        ]);
    }
}
