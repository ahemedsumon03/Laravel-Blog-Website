<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactModel;

class ContactController extends Controller
{
    function insertData(Request $request)
    {
        $name = $request->input('name');
        $mobile = $request->input('mobile');
        $mail = $request->input('mail');
        $msg = $request->input('msg');

        $result = ContactModel::insert([

            'Name'=>$name,
            'Mobile_no'=>$mobile,
            'Email'=>$mail,
            'Message'=>$msg
        ]);

        if($result == true)
        {
            return 1;
        }
        else{
            return 0;
        }
    }

    function ContactIndex()
    {
        return view('Contact');
    }
}
