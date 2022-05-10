<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function __construct()
    {

    }

    public function sendMail(Request $request)
    {

        $data = $request->validate(
            [
                'name'=>'name',
                'email'=>'required',
                'url'=>'nullable',
            ]
        );

        $maildata = [
            'title' => $data['name'],
            'url' => $data['url'],
            'message'=>$data['message']
        ];

        Mail::to($data['email'])->send(new SendMail($maildata));

    }
}
