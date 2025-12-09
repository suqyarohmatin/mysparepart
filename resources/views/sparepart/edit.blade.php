@extends('layouts.main')

@section('content')

<div class="card shadow">
    <div class="card-header">
        <h3 class="m-0">Edit Sparepart</h3>
    </div>

    <div class="card-body">
        <form action="{{ route('sparepart.update', $data->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Kode Sparepart</label>
                <input type="text" name="kode_sparepart" class="form-control" value="{{ $data->kode_sparepart }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Sparepart</label>
                <input type="text" name="nama_sparepart" class="form-control" value="{{ $data->nama_sparepart }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Merk</label>
                <input type="text" name="merk" class="form-control" value="{{ $data->merk }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Stok</label>
                <input type="number" name="stok" class="form-control" value="{{ $data->stok }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="number" name="harga" class="form-control" value="{{ $data->harga }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control">{{ $data->deskripsi }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('sparepart.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>

@endsection
