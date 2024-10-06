@extends('layouts.app')
@section ('content')
<style>
    body {
        background: #f0f0f5; /* Latar belakang abu-abu terang, khas macOS */
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
    }

    table {
        margin: 0 auto;
        border-radius: 12px; /* Sudut melengkung */
        background: rgba(255, 255, 255, 0.7); /* Efek frosted glass */
        backdrop-filter: blur(10px); /* Blur efek latar belakang */
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5); /* Bayangan lembut */
        width: auto;
        border-collapse: collapse; /* Membuat border terlihat lebih terpisah */
        border-spacing: 0 2px; /* Jarak antar baris */
    }

    thead {
        background-color: rgba(255, 255, 255, 0.9); /* Warna putih semi transparan */
        color: #333; /* Warna teks gelap */
    }

    thead th {
        text-align: center; /* Pusatkan teks di header */
        padding: 12px;
        font-weight: 500;
        font-size: 14px;
        border-bottom: 2px solid rgba(0, 0, 0, 0.05); /* Garis bawah halus */
    }

    tbody tr {
        background-color: rgba(255, 255, 255, 0.85); /* Warna putih dengan transparansi */
        transition: background-color 0.3s; /* Animasi transisi saat hover */
    }

    tbody tr:hover {
        background-color: rgba(240, 240, 240, 0.85); /* Warna lebih gelap saat hover */
    }

    th, td {
        padding: 16px; /* Padding lebih besar untuk ruang lebih */
        font-size: 15px; /* Font ukuran sedang */
        color: #333; /* Warna teks */
    }

    td {
        text-align: center; /* Pusatkan teks di sel */
    }

    td:first-child {
        border-radius: 12px 0 0 12px; /* Sudut melengkung kiri */
    }

    td:last-child {
        border-radius: 0 12px 12px 0; /* Sudut melengkung kanan */
    }

    .aksi button {
        background-color: #007bff; /* Warna biru khas untuk tombol macOS */
        border: none;
        border-radius: 8px;
        padding: 8px 12px;
        color: white;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .aksi button:hover {
        background-color: #0056b3; /* Warna lebih gelap saat hover */
    }
</style>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($users as $user) {
        ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['nama'] ?></td>
            <td><?= $user['npm'] ?></td>
            <td><?= $user['nama_kelas'] ?></td>
            <td class="aksi"><button>-</button></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
@endsection
