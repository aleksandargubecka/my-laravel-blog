<?php

namespace App\Http\Controllers;


use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function getIndex(){
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('pages/home')->with('posts', $posts);
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

    public function getContact(){
        return view('pages/contact');
    }

    public function postContact(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required|min:10'
        ]);

        $data = array(
          'email' => $request->email,
          'subject' => $request->subject,
          'bodyMessage' => $request->message,
        );

        Mail::send('emails.contact', $data, function ($mail) use ($data){
            $mail->from($data['email']);
            $mail->to('aleksandargubecka@gmail.com');
            $mail->subject($data['subject']);
        });

        return redirect()->route('contact.get')->with('success', 'The blog post was successfully deleted.');
    }
}