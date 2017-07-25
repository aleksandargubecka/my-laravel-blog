<?php

namespace App\Http\Controllers;


use App\Post;

class PagesController extends Controller
{
    public function getIndex(){
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('pages/home')->with('posts', $posts);
    }

    public function getContact(){
        return view('pages/contact');
    }

    public function getAbout() {
        $first = "Alek";
        $last = "Gubecka";

        $fullname = $first . " " . $last;
        $email = 'aleksandargubecka@gmail.com';
        $data = array(
            'fullname' => $fullname,
            "email" => $email
        );
        return view('pages/about')->withData($data);
    }
}