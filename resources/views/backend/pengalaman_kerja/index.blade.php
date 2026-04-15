@extends('backend.layouts.template')

@section('content')

<div class="page-breadcrumb">
    <h4 class="page-title">Pengalaman Kerja</h4>
</div>

<div class="container-fluid">

    <div class="card">
        <div class="card-body">

            <a href="/pengalaman_kerja/create" class="btn btn-primary mb-3">
                + Tambah
            </a>

            <div class="table-responsive">
                <table class="table table-bordered">

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jabatan</th>
                            <th>Tahun Masuk</th>
                            <th>Tahun Keluar</th>
                            <th>Sistem</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($pengalaman_kerja as $key => $data)

                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $data->jabatan }}</td>
                            <td>{{ $data->tahun_masuk }}</td>
                            <td>{{ $data->tahun_keluar }}</td>
                            <td>{{ $data->sistem }}</td>

                            <td>

                                <a href="/pengalaman_kerja/{{ $data->id }}/edit"
                                    class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <form action="{{ route('pengalaman_kerja.destroy', $data->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')

                                    <button type="button"
                                        class="btn btn-danger btn-sm btn-hapus">
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
    </div>
<script>
document.addEventListener('click', function(e) {

    let button = e.target.closest('.btn-hapus');

    if (button) {

        let form = button.closest('form');

        Swal.fire({
            title: 'Yakin ingin menghapus?',
            text: "Data tidak bisa dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });

    }

});
</script>
</div>

@endsection