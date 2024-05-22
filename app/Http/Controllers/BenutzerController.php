<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BenutzerController extends Controller
{
    public function index() {
        return view('login');
    }

    public function benutzerLogin(Request $request) {
        $request->validate([
            'nachname' => 'required|alpha|min:2|max:10',
            'vorname' => ['required', 'alpha', 'min:2', 'max:10'],
            'mail' => ['required', 'email'],
        ], [
            'nachname.required' => 'Nachname ist ein Pflichtfeld.',
            'nachname.alpha' => 'Nachname darf nur Buchstaben haben.',
            'nachname.min' => 'Nachname muss min. :min  Buchstaben haben.',
            'nachname.max' => 'Nachname muss max. :max Buchstaben haben.',
        ]);



        return $request->nachname . ' ' . $request['vorname'];
    }
}
