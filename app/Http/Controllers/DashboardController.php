<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (!session('logged_in')) {
            return redirect('/login')->with('error', 'Silakan login terlebih dahulu.');
        }

        $stats = [
            'total_events' => 5,
            'total_users' => 12,
            'total_registrations' => 34,
        ];

        return view('dashboard', compact('stats'));
    }
}