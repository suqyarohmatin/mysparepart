@extends('layouts.main')

@section('content')

<div class="card shadow">
    <div class="card-header">
        <h3 class="m-0">Tambah Sparepart</h3>
    </div>

    <div class="card-body">
        <form action="{{ route('sparepart.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Kode Sparepart</label>
                <input type="text" name="kode_sparepart" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Sparepart</label>
                <input type="text" name="nama_sparepart" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Merk</label>
                <input type="text" name="merk" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Stok</label>
                <input type="number" name="stok" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="number" name="harga" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('sparepart.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>

@endsection
