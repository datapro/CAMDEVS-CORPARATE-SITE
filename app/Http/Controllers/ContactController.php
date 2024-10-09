<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function contact(){
        return view('contact.index');
    }
    public function send(Request $request){
         // Validate the form data
         $request->validate([
            'fname' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'msg' => 'required',
        ]);

        // Prepare the data for email
        $data = [
            'fname' => $request->fname,
            'phone' => $request->phone,
            'email' => $request->email,
            'msg' => $request->msg,
        ];

        // Send the email
        Mail::send('emails.contact', $data, function ($message) use ($request) {
            $message->to('admin@camdevsfoundation.com.ng')  // Change to the email you want to receive the message
                    ->subject('New Contact Message');
        });

        // Redirect back with success message
        return redirect()->route('index')->with('success', 'Your message has been sent successfully!');
    }
    public function subscribe(Request $request){
         // Validate the form data
         $request->validate([
            'email' => 'required|email',
         
        ]);

        // Prepare the data for email
        $data = [
            'email' => $request->email,
        ];

        // Send the email
        Mail::send('emails.subscribe', $data, function ($message) use ($request) {
            $message->to('admin@camdevsfoundation.com.ng')  // Change to the email you want to receive the message
                    ->subject('New Subscriber');
        });

        // Redirect back with success message
        return redirect('/')->with('success', 'You have successfully subscribe');
    }

    }

