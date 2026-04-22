@extends('backend.layouts.template')

@section('content')

<div class="page-breadcrumb">
    <h4 class="page-title">Tambah Pendidikan</h4>
</div>

<div class="container-fluid">

    <div class="card">
        <div class="card-body">

            <form action="{{ route('pendidikan.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama Sekolah</label>
                    <input type="text" name="nama_sekolah" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Tingkatan</label>
                    <select name="tingkatan" class="form-control">
                        <option>SMA/SMK</option>
                        <option>SMP</option>
                        <option>SD</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tahun Masuk</label>
                    <input type="number" name="tahun_masuk" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Tahun Selesai</label>
                    <input type="number" name="tahun_keluar" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">
                    Simpan
                </button>

                <a href="{{ route('pendidikan.index') }}" class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>
    </div>

</div>

@endsection