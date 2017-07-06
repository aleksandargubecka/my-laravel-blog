<?php
/**
 * Created by PhpStorm.
 * User: Gubecka
 * Date: 01.07.2017.
 * Time: 2:36
 */

namespace App\Http\Controllers;


class PagesController extends Controller
{
    public function getIndex(){
        return view('pages/home');
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