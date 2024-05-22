<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularController extends Controller
{
    public function index()
    {
        return view('formular');
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

        return redirect('/formular')->with('success', 'DANKE, Wir haben Ihre Nachricht bekommen!');
    }
}
