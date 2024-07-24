<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Mail\MessagesMail;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class MessageControler extends Controller
{
    function messages(Request $request)
    {
        $rules = [
            'name' => 'required|string|min:3|max:255',
            "email" => "required|email|string|max:255",
            "subject" => "required|string|min:5|max:255",
            "message" => "required|string|min:10|max:1000",
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect("/#contact")->withErrors($validator)->withInput();
        }

        $message = new Message();
        $message->name = $request->input("name");
        $message->email = $request->input("email");
        $message->subject = htmlspecialchars($request->input("subject"));
        $message->message = htmlspecialchars($request->input("message"));
        $message->save();

        $mailto = "info@legolas.tech";
        Mail::to($mailto)->send(new MessagesMail($message));
        // chech validation
        // $data = $request->validated();
        // save message
        // $message = Message::create($data);
        // $email = $message["email"];
        // send to the email
        return redirect("/#contact")->with("success", "Your Message Has been sent successiful");
    }
}