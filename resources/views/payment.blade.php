<html>
<head>
    <title>Pembayaran Tiket</title>
    <style>
    </style>
</head>
<body>
<div class="container">
    <h1>Konfirmasi Pembayaran</h1>
    <div class="info">
        <p><strong>No. Registrasi:</strong> {{ $registration['registration_number'] }}</p>
        <p><strong>Event:</strong> {{ $registration['event_name'] }}</p>
        <p><strong>Tiket:</strong> {{ $registration['ticket_name'] }}</p>
        <p><strong>Total Bayar:</strong> Rp {{ number_format($registration['price'], 0, ',', '.') }}</p>
        <p><strong>Status:</strong> 
            @if($registration['status'] == 'paid') Lunas @else Pending @endif
        </p>
    </div>

    @if($registration['status'] != 'paid')
        <h3>Rekening Tujuan</h3>
        @foreach($bankAccounts as $bank)
        <div class="bank">
            <strong>{{ $bank['bank'] }}</strong><br>
            No. Rekening: {{ $bank['account_number'] }}<br>
            a.n. {{ $bank['account_name'] }}
        </div>
        @endforeach

        <h3>Upload Bukti Transfer</h3>
        <form action="{{ url('/payment/' . $registration['id'] . '/upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Bank Tujuan</label>
                <select name="payment_method" required>
                    <option value="">Pilih</option>
                    <option>BCA</option>
                    <option>Mandiri</option>
                </select>
            </div>
            <div class="form-group">
                <label>Bukti Transfer (file gambar)</label>
                <input type="file" name="payment_proof" accept="image/*" required>
            </div>
            <button type="submit">Upload Bukti</button>
        </form>
    @else
        <p style="color: green;">✅ Pembayaran sudah lunas.</p>
    @endif
    <a href="/my-tickets" class="back">← Kembali</a>
</div>
</body>
</html>