<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Detail Event</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container mt-5">
    <div class="card shadow-sm">
      <div class="card-header bg-primary text-white">
        <h4>Detail Event</h4>
      </div>
      <div class="card-body">
        <h5 class="card-title">{{ $event['nama'] }}</h5>
        <p class="card-text">
          <strong>ID:</strong> {{ $event['id'] }} <br>
          <strong>Tanggal:</strong> {{ $event['tanggal'] }} <br>
          <strong>Deskripsi:</strong> {{ $event['deskripsi'] }}
        </p>
        <a href="/event" class="btn btn-secondary">← Kembali ke Daftar Event</a>
      </div>
    </div>
  </div>

</body>
</html>
