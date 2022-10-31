<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactUsController extends Controller
{
    public function submitContactUsForm(Request $request){
        if(Auth::check()){
            // dd($request->all());
            $attributes = $request->validate([
            'username' => 'required',
            'useremail' => 'required',
            'usercontact' => 'required',
            'useraddress' => 'required',
            'usermessage' => 'required',
        ]);

        $message = ContactUs::create($attributes);

        if ($attributes){
            return redirect('/')->with('success','Your message has been successfully submitted.');
        }else {
            return redirect('/')->with('error', 'Something Wrong');
        }
        
    }else{
            return redirect()->back()->with('error', 'You have to login first');
        }
    }



    // Admin Side
    public function index(){
        $messages = ContactUs::all();
        return view('admin.user-feedback', compact('messages'));
    }
}
