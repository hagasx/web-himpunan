<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aspirasi;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    public function index()
    {
        $aspirasis = Aspirasi::latest()->get();
        return view('admin.aspirasi.index', compact('aspirasis'));
    }

    public function destroy(Aspirasi $aspirasi)
    {
        $aspirasi->delete();
        return redirect()->route('admin.aspirasi.index')->with('success', 'Aspirasi berhasil dihapus.');
    }
}
