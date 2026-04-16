<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pembayaran Tiket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4>Konfirmasi Pembayaran</h4>
        </div>
        <div class="card-body">
            <!-- Info Registrasi -->
            <div class="alert alert-info">
                <p><strong>No. Registrasi:</strong> {{ $registration['registration_number'] }}</p>
                <p><strong>Event:</strong> {{ $registration['event_name'] }}</p>
                <p><strong>Tiket:</strong> {{ $registration['ticket_name'] }}</p>
                <p><strong>Total Bayar:</strong> Rp {{ number_format($registration['price'], 0, ',', '.') }}</p>
                <p><strong>Status:</strong> 
                    @if($registration['status'] == 'paid')
                        <span class="badge bg-success">Lunas</span>
                    @else
                        <span class="badge bg-warning text-dark">Pending</span>
                    @endif
                </p>
            </div>

            @if($registration['status'] != 'paid')
                <h5>Rekening Tujuan</h5>
                <div class="row mb-4">
                    @foreach($bankAccounts as $bank)
                    <div class="col-md-6 mb-3">
                        <div class="card border-primary">
                            <div class="card-body">
                                <strong>{{ $bank['bank'] }}</strong><br>
                                No. Rekening: {{ $bank['account_number'] }}<br>
                                a.n. {{ $bank['account_name'] }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <h5>Upload Bukti Transfer</h5>
                <form action="{{ url('/payment/' . $registration['id'] . '/upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Bank Tujuan</label>
                        <select name="payment_method" class="form-select" required>
                            <option value="">Pilih Bank</option>
                            <option>BCA</option>
                            <option>Mandiri</option>
                            <option>BRI</option>
                            <option>BNI</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Bukti Transfer (file gambar)</label>
                        <input type="file" name="payment_proof" class="form-control" accept="image/*" required>
                        <div class="form-text">Format JPG, PNG, maksimal 2MB</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Upload Bukti</button>
                </form>
            @else
                <div class="alert alert-success text-center">
                    ✅ Pembayaran sudah lunas. Terima kasih!
                </div>
            @endif

            <div class="mt-4 text-center">
                <a href="/event" class="btn btn-secondary">← Kembali ke Daftar Event</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>