<?php

namespace App\Http\Controllers;

use App\Mail\sendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    function __construct()
    {
        //
    }

    public function index(){
     return view('index');
    }

    public function sendContactMail(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Prepare the email data
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];
        try {
            // Send the email
            Mail::to('pramodsharma2696@gmail.com')->send(new sendMail($data));
            // Return a JSON response
            return response()->json(['success' => true, 'message' => 'Your message has been sent successfully!']);
        } catch (\Exception $e) {
            // Handle any exceptions that may occur
            return response()->json(['success' => false, 'message' => 'Failed to send email. Please try again later.'], 500);
        }
    }
}
