<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4>Admin Dashboard</h4>
        </div>
        <div class="card-body">
            <p class="card-text">Selamat datang, <strong>Admin</strong>!</p>

            <div class="row text-center mt-4">
                <div class="col-md-4 mb-3">
                    <div class="card bg-info text-white">
                        <div class="card-body">
                            <h5 class="card-title">Total Event</h5>
                            <p class="card-text display-6">{{ $stats['total_events'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card bg-success text-white">
                        <div class="card-body">
                            <h5 class="card-title">Total User</h5>
                            <p class="card-text display-6">{{ $stats['total_users'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card bg-warning text-white">
                        <div class="card-body">
                            <h5 class="card-title">Total Pendaftaran</h5>
                            <p class="card-text display-6">{{ $stats['total_registrations'] }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <h5>Menu Admin</h5>
                <div class="list-group">
                    <a href="/admin/events" class="list-group-item list-group-item-action">Kelola Event</a>
                    <a href="/admin/categories" class="list-group-item list-group-item-action">Kelola Kategori</a>
                    <a href="/admin/registrations" class="list-group-item list-group-item-action">Kelola Pendaftaran</a>
                </div>
            </div>

            <div class="mt-4 text-center">
                
                <a href="/event" class="btn btn-secondary">Kembali ke Daftar Event</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>