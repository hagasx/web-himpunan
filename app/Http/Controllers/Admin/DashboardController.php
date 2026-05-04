<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Aspirasi;
use Illuminate\Support\Facades\Crypt;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::where('role', 'anggota')->count();
        $totalAspirasi = Aspirasi::count();

        return view('admin.dashboard', compact('totalUsers', 'totalAspirasi'));
    }
}