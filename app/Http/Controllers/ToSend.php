<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;


class ToSend extends Controller
{

    public function contact()
    {
        return view('index');
    }

    public function indexSubmit(Request $request)
    {

        Mail::send(
            'emails.emaildata',
            [
                'name' => $request->name,
                'email' => $request->email,
                'contact' => $request->contact,
                'msg' => $request->msg

            ],


            function ($mail) use ($request) {
                $mail->from('samora.sm.sam@gmail.com', $request->name);
                $mail->to(['samora.sm.sam@gmail.com'])->subject('New enquiry');
            }
        );

        return redirect ('/thankyou');
    }
}