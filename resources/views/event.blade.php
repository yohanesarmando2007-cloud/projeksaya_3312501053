<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Event</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Daftar Event</h4>
            <a href="/login" class="btn btn-light btn-sm">Login Admin</a>
        </div>
        <div class="card-body">
            <ul class="list-group">
                @foreach($events as $event)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <strong>{{ $event['id'] }}.</strong> {{ $event['nama'] }}
                            <br><small class="text-muted">{{ $event['tanggal'] }}</small>
                        </div>
                        <a href="/detail/{{ $event['id'] }}" class="btn btn-sm btn-primary">Detail Event</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

</body>
</html>