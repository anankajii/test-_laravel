<!DOCTYPE html>
<html>

<head>
    <title>Dropzone Image Upload</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css">
</head>

<body>

    <div class="container">
        <h3 class="text-center mt-5">Dropzone Image Upload in Laravel</h3>

        <form method="post" action="{{ route('dropzone.store') }}"
            enctype="multipart/form-data"
            class="dropzone"
            id="image-upload">
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
        Dropzone.autoDiscover = false;

        var myDropzone = new Dropzone("#image-upload", {
            url: "{{ route('dropzone.store') }}",
            paramName: "file",
            maxFilesize: 2,
            acceptedFiles: ".jpeg,.jpg,.png",
            addRemoveLinks: true,
            autoProcessQueue: false,

            init: function() {

                let btn = document.getElementById("submit-all");

                btn.addEventListener("click", function(e) {
                    e.preventDefault();
                    myDropzone.processQueue();
                });

                this.on("sending", function(file, xhr, formData) {
                    formData.append("_token", "{{ csrf_token() }}");
                });

                this.on("success", function(file, response) {

                    btn.innerText = "Selesai";
                    btn.classList.remove("btn-primary");
                    btn.classList.add("btn-success");
                    btn.disabled = true;
                });

                this.on("error", function() {
                    alert("Upload gagal!");
                });
            }
        });
    </script>

</body>

</html>