<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email:rfc', 'max:254'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        Mail::to('husuarezjr@gmail.com')
            ->send(new ContactMail($validated['name'], $validated['email'], $validated['message']));
        return ['success' => true];
    }
}
