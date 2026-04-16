<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    // Menampilkan halaman pembayaran
    public function show($registrationId)
    {
        // Data registrasi statis
        $registrations = [
            1 => [
                'id' => 1,
                'registration_number' => 'REG001',
                'event_name' => 'Seminar AI',
                'ticket_name' => 'Regular',
                'price' => 150000,
                'status' => 'pending',
            ],
            2 => [
                'id' => 2,
                'registration_number' => 'REG002',
                'event_name' => 'Workshop Laravel',
                'ticket_name' => 'VIP',
                'price' => 300000,
                'status' => 'pending',
            ],
        ];

        if (!isset($registrations[$registrationId])) {
            abort(404, 'Data pembayaran tidak ditemukan');
        }

        $registration = $registrations[$registrationId];
        $bankAccounts = [
            ['bank' => 'BCA', 'account_number' => '1234567890', 'account_name' => 'PT Event Management'],
            ['bank' => 'Mandiri', 'account_number' => '0987654321', 'account_name' => 'PT Event Management'],
        ];

        return view('payment', compact('registration', 'bankAccounts'));
    }

    // Proses upload bukti
    public function upload(Request $request, $registrationId)
    {
        $request->validate([
            'payment_method' => 'required|string',
            'payment_proof' => 'required|image|max:2048'
        ]);

        // Simulasi sukses
        return redirect('/my-tickets')->with('success', 'Bukti pembayaran berhasil diupload!');
    }
}