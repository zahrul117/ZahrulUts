@extends('app')

@section('content')
<div class="container">
    <h2>Tambah Program Studi</h2>

    {{-- Form Tambah Prodi --}}
    <form action="{{ route('prodi.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Prodi</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="fakultas" class="form-label">Fakultas</label>
            <input type="text" name="fakultas" id="fakultas" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('prodi.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
