@extends('backend.layouts.template')

@section('content')

<div class="page-breadcrumb">
    <h4 class="page-title">Tambah Pengalaman Kerja</h4>
</div>

<div class="container-fluid">
<div class="card">
    <div class="card-body">

        <form action="/pengalaman_kerja" method="POST">

            @csrf

            <div class="form-group">
                <label>Jabatan</label>
                <input type="text" name="jabatan" class="form-control">
            </div>

            <div class="form-group">
                <label>Tahun Masuk</label>
                <input type="text" name="tahun_masuk" class="form-control">
            </div>

            <div class="form-group">
                <label>Tahun Keluar</label>
                <input type="text" name="tahun_keluar" class="form-control">
            </div>

            <div class="form-group">
                <label>Sistem</label>
                <input type="text" name="sistem" class="form-control">
            </div>

            <button type="submit" class="btn btn-success">
                Simpan
            </button>

            <a href="/pengalaman_kerja" class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>
</div>

</div>

@endsection
