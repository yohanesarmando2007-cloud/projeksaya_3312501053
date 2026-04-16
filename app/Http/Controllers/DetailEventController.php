<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailEventController extends Controller
{
    public function show($id)
    {
    $events = [
        ['id' => 1, 'nama' => 'Seminar AI', 'tanggal' => '2026-03-20', 'deskripsi' => 'Seminar tentang Artificial Intelligence.'],
        ['id' => 2, 'nama' => 'Workshop Laravel', 'tanggal' => '2026-03-25', 'deskripsi' => 'Workshop intensif membahas Laravel.'],
        ['id' => 3, 'nama' => 'Hackathon Polibatam', 'tanggal' => '2026-04-01', 'deskripsi' => 'Kompetisi coding di Polibatam.'],
    ];

    $event = collect($events)->firstWhere('id', $id);

    return view('detail_event', compact('event'));
    }

}
