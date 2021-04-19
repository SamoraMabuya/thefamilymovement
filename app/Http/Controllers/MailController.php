<?php

namespace App\Http\Controllers;

use App\Mail\index;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'msg' => $request->msg

        ];

        Mail::to('samora.sm.sam@gmail.com')->send(new index($data));
    }

    //
}