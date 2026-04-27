<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    public function index()
    {
        return view('aspirasi');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'pesan' => 'required|string',
        ]);

        Aspirasi::create($validatedData);

        return redirect('/aspirasi')->with('success', 'Aspirasi berhasil dikirim. Terima kasih atas masukan Anda!');
    }
}
