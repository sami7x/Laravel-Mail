<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Validator;

class MailController extends Controller
{

public function sendEmail(MailRequest $request)
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
