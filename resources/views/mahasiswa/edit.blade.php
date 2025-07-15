@extends('app')

@section('content')
<div class="container">
    <h2>Edit Mahasiswa</h2>

    {{-- Tampilkan validasi error jika ada --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Form Edit --}}
    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}" required>
        </div>

        <div class="mb-3">
            <label>NIM</label>
            <input type="text" name="nim" class="form-control" value="{{ $mahasiswa->nim }}" required>
        </div>

        <div class="mb-3">
            <label>Kelas</label>
            <input type="text" name="kelas" class="form-control" value="{{ $mahasiswa->kelas }}" required>
        </div>

        <div class="mb-3">
            <label>Prodi</label>
            <select name="prodi_id" class="form-control" required>
                @foreach($prodi as $pro)
                    <option value="{{ $pro->id }}" {{ $mahasiswa->prodi_id == $pro->id ? 'selected' : '' }}>
                        {{ $pro->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Angkatan</label>
            <input type="number" name="angkatan" class="form-control" value="{{ $mahasiswa->angkatan }}" required>
        </div>

        <button class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
