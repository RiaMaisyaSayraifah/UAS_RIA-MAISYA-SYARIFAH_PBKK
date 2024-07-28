<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .admin-container {
            background-color: white;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<div class="admin-container">
        <h2 class="text-center">Admin Dashboard</h2>
        <form id="row">
            <div class="mb-3">
                    <div class="card-header"> Profile </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar mr-3">
                            <img src="{{ $user->avatar ?? 'image/pp.png' }}" alt="User Avatar" class="img-thumbnail" style="width: 100px; height: 100px;">
                                <h5>{{ $user->name ?? 'Ria Maisya Syarifah' }}</h5>
                                <p>{{ $user->email ?? '211220096@unmuhpnk.ac.id' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
