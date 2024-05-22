<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactControlle extends Controller
{
    public function index()
    {
        return view('contakt');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'nachname' => 'required|max:255',
            'telefonnummer' => 'required|regex:/^\d{10}$/',
            'email' => 'required|email',
            'nachricht' => 'required|min:10',
        ]);

        // Hier kannst du deine Logik für die Verarbeitung der Formulardaten hinzufügen

        return redirect('/contakt')->with('success', 'Nachricht erfolgreich gesendet!');
    }
}
