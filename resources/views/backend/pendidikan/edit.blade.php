@extends('backend.layouts.template')

@section('content')
<div class="container">

    <h4>Edit Pendidikan</h4>

    <form action="{{ route('pendidikan.update', $pendidikan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-2">
            <label>Nama Sekolah</label>
            <input type="text" name="nama_sekolah" value="{{ $pendidikan->nama_sekolah }}" class="form-control">
        </div>

        <div class="mb-2">
            <label>Tingkatan</label>
            <select name="tingkatan" class="form-control">
                <option {{ $pendidikan->tingkatan == 'SMA/SMK' ? 'selected' : '' }}>SMA/SMK</option>
                <option {{ $pendidikan->tingkatan == 'SMP' ? 'selected' : '' }}>SMP</option>
                <option {{ $pendidikan->tingkatan == 'SD' ? 'selected' : '' }}>SD</option>
            </select>
        </div>

        <div class="mb-2">
            <label>Tahun Masuk</label>
            <input type="number" name="tahun_masuk" value="{{ $pendidikan->tahun_masuk }}" class="form-control">
        </div>

        <div class="mb-2">
            <label>Tahun Selesai</label>
            <input type="number" name="tahun_keluar" value="{{ $pendidikan->tahun_keluar }}" class="form-control">
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('pendidikan.index') }}" class="btn btn-secondary">Cancel</a>

    </form>

</div>
@endsection