<!DOCTYPE html>
<html>
<head>
    <title>Form Validation dengan Laravel</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:#f8f9fa;">

<div class="container mt-5">

    <h2 class="text-center mb-4">Form Validation dengan Laravel</h2>

    <form action="/formulir/proses" method="POST">
        @csrf

        <!-- NAMA -->
        <div class="mb-3">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" name="nama"
                class="form-control @error('nama') is-invalid @enderror"
                value="{{ old('nama') }}">

            @error('nama')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- ALAMAT -->
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="alamat"
                class="form-control @error('alamat') is-invalid @enderror"
                rows="4">{{ old('alamat') }}</textarea>

            @error('alamat')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button class="btn btn-primary">Simpan</button>

    </form>

</div>

</body>
</html>