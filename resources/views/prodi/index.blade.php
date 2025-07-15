@extends('app')

@section('content')
<div class="container">
    <h2>Data Program Studi</h2>
    
    {{-- Tombol tambah --}}
    <a href="{{ route('prodi.create') }}" class="btn btn-primary mb-3">+ Tambah Prodi</a>

    {{-- Alert sukses --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Tabel --}}
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Nama Prodi</th>
                <th>Fakultas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($prodi as $item)
            <tr>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->fakultas }}</td>
                <td>
                    <a href="{{ route('prodi.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('prodi.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach

            @if ($prodi->isEmpty())
            <tr>
                <td colspan="3" class="text-center">Belum ada data prodi.</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
