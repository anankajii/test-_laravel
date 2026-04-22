<!DOCTYPE html>
<html>
<head>
    <title>Upload File</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h3 class="text-center">Upload File Dengan Laravel</h3>

    {{-- SUCCESS --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- ERROR --}}
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif

    <form action="{{ route('upload.resize') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>File Gambar</label>
            <input type="file" name="file" class="form-control">
        </div>

        <div class="form-group">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control"></textarea>
        </div>

        <button class="btn btn-primary">Upload</button>
    </form>

</div>

</body>
</html>