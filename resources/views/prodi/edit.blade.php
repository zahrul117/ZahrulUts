@extends('app')

@section('content')
<div class="container">
    <h2>Edit Program Studi</h2>



    {{-- Form Edit Prodi --}}
    <form action="{{ route('prodi.update', $prodi->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama Prodi</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ $prodi->nama }}" required>
        </div>

        <div class="mb-3">
            <label for="fakultas" class="form-label">Fakultas</label>
            <input type="text" name="fakultas" id="fakultas" class="form-control" value="{{ $prodi->fakultas }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('prodi.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
