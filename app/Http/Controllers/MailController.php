<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;


class MailController extends Controller
{

public function sendEmail(Request $request)
{
    $sender=$request->input('sender');
    $email = $request->input('email');
    $name = $request->input('name');
    $title = $request->input('title');
    $message= $request->input('message');
    Mail::to($email)->send(new TestMail($name, $title, $message,$sender));
    return redirect()->back()->with('message', 'Email sent successfully!');

}

}
