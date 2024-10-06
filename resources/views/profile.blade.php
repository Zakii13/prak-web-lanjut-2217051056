<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Warna latar belakang abu-abu muda */
            color: #343a40; /* Warna teks abu-abu gelap */
        }

        .profile-container {
            margin-top: 50px;
            padding: 30px;
            border-radius: 15px;
            background-color: #ffffff; /* Latar belakang putih untuk kartu */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Bayangan */
        }

        h1 {
            margin-bottom: 30px;
            text-align: center;
            color: #007bff; /* Warna biru untuk judul */
        }

        .info-item {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #e9ecef; /* Batas abu-abu muda */
            border-radius: 8px; /* Sudut melengkung */
            background-color: #f1f3f5; /* Latar belakang abu-abu muda */
        }
    </style>
</head>
<body>
    <div class="container profile-container">
        <h1>Profil User</h1>
        <div class="info-item">
            <strong>Nama:</strong> {{ $nama }}
        </div>
        <div class="info-item">
            <strong>NPM:</strong> {{ $npm }}
        </div>
        <div class="info-item">
            <strong>Kelas:</strong> {{ $nama_kelas ?? 'Kelas tidak ditemukan' }}
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('user.create') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</body>
</html>
