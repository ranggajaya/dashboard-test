<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactReceived;

class PageController extends Controller
{
    public function home() {
    return view('home'); // file Blade
    }

    public function submitContact(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        ContactMessage::create($data); // simpan ke DB

        Mail::to('admin@griffon.com')->send(new ContactReceived($data)); // kirim email

        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}
