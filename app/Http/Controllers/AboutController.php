<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $about = 'I am Ujjwal Adhikari, a passionate web developer from Pokhara. Currently at intern at firefly tech.';
        $image = 'https://images.ctfassets.net/h6goo9gw1hh6/2sNZtFAWOdP1lmQ33VwRN3/24e953b920a9cd0ff2e1d587742a2472/1-intro-photo-final.jpg?w=1200&h=992&fl=progressive&q=70&fm=jpg';
        return view('contents.about',
        [
            'aboutMe'=>$about,
            'image'=>$image
    ]);
    }
}
