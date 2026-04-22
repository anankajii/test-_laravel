<!DOCTYPE html>
<html>
<head>
    <title>Dropzone PDF Upload</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css">
</head>
<body>

<div class="container">
    <h3 class="text-center mt-5">Dropzone PDF Upload in Laravel</h3>

    <!-- ALERT SUCCESS -->
    <div id="success-alert" class="alert alert-success d-none text-center">
        Upload berhasil!
    </div>

    <form method="post" action="{{ route('pdf.store') }}" 
          enctype="multipart/form-data"
          class="dropzone" 
          id="pdf-upload">
        @csrf
    </form>

    <div class="text-center mt-3">
        <button type="button" class="btn btn-primary" id="submit-all">
            Upload Semua
        </button>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>

<script>
Dropzone.options.pdfUpload = {
    maxFilesize: 2,
    acceptedFiles: ".pdf",
    addRemoveLinks: true,
    autoProcessQueue: false,

    init: function () {
        var myDropzone = this;

        // klik tombol upload
        document.getElementById("submit-all").addEventListener("click", function(e) {
            e.preventDefault();
            myDropzone.processQueue();
        });

        // kirim token
        this.on("sending", function(file, xhr, formData) {
            formData.append("_token", "{{ csrf_token() }}");
        });

        // SUCCESS EVENT
        this.on("success", function(file, response) {

            // tampilkan alert sukses
            document.getElementById("success-alert").classList.remove("d-none");

            // ubah tombol
            document.getElementById("submit-all").innerText = "Selesai";
            document.getElementById("submit-all").classList.remove("btn-primary");
            document.getElementById("submit-all").classList.add("btn-success");
        });

        // ERROR EVENT
        this.on("error", function(file, errorMessage) {
            alert("Upload gagal!");
        });
    }
};
</script>

</body>
</html>