<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        // Data dummy event
        $events = [
            ['id' => 1, 'nama' => 'Seminar AI', 'tanggal' => '2026-03-20'],
            ['id' => 2, 'nama' => 'Workshop Laravel', 'tanggal' => '2026-03-25'],
            ['id' => 3, 'nama' => 'Hackathon Polibatam', 'tanggal' => '2026-04-01'],
        ];

        // Kirim ke view event.blade.php
        return view('event', compact('events'));
    }

    public function detail($id)
    {
        return "Detail event dengan ID: " . $id;
    }
}