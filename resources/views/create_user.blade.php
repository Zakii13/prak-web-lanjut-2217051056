@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card p-4">
            <h2 class="text-center mb-4">Create New User</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('user.store') }}" method="POST">
    @csrf
    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama" required>

    <label for="npm">NPM:</label>
    <input type="text" name="npm" id="npm" required>

    <label for="kelas_id">Kelas:</label>
    <select name="kelas_id" required>
        @foreach($kelas as $k)
            <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
        @endforeach
    </select>

    <button type="submit">Simpan</button>
</form>


        </div>
    </div>
    @endsection

