<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        return view('pendaftaran');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:20',
            'program_studi' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_hp' => 'required|string|max:20',
            'alasan_bergabung' => 'required|string',
        ]);

        Pendaftaran::create($validatedData);

        return redirect('/pendaftaran')->with('success', 'Pendaftaran berhasil dikirim. Kami akan menghubungi Anda segera!');
    }
}
