<?php

namespace App\Http\Controllers;

use App\Models\GuestMessage;
use Illuminate\Http\Request;

class GuestMessageController extends Controller
{
    // Store guest messages
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        GuestMessage::create($validatedData);

        return redirect()->back()->with('success', 'Thank you for your message!');
    }

    // Display messages to admin
    public function index()
    {
        $messages = GuestMessage::latest()->get();
        return view('admin.guest-msg', compact('messages'));
    }

    public function showContactForm()
    {
        return view('contact-us'); // Ensure this view exists at resources/views/contact-us.blade.php
    }

}
