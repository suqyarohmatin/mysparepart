@extends('layouts.main')

@section('content')

<div class="card shadow">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="m-0">Data Sparepart Mobil</h3>
        <a href="{{ route('sparepart.create') }}" class="btn btn-primary">+ Tambah Sparepart</a>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Merk</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th width="150px">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->kode_sparepart }}</td>
                    <td>{{ $item->nama_sparepart }}</td>
                    <td>{{ $item->merk }}</td>
                    <td>{{ $item->stok }}</td>
                    <td>Rp {{ number_format($item->harga) }}</td>
                    <td>
                        <a href="{{ route('sparepart.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('sparepart.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-danger btn-sm">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
