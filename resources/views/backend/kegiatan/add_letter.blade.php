<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container p-5">
        <form action="/admin/letter_form_add" method="post" enctype="multipart/form-data">
            @if(session('errors'))
                <div class="alert alert-danger" role="alert">
                    {{ (session('errors'))->first() }}
                </div>
            @endif
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">lampiran</label>
                <input type="text" class="form-control" id="lampiran" name="lampiran">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">pengirim</label>
                <input type="text" class="form-control" id="pengirim" name="pengirim">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">tanggal</label>
                <input type="date" class="form-control" id="tanggal"  name="tanggal">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">nomer_surat</label>
                <input type="text" class="form-control" id="nomer_surat" name="nomer_surat">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">perihal</label>
                <input type="text" class="form-control" id="perihal" name="perihal">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">file</label> 
                <input type="file" class="form-control" id="file" name="file" accept="aplication/msword, application/pdf">
            </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>