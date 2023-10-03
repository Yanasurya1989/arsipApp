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
        <form action="/surat_keluar/add" method="post" enctype="multipart/form-data">
            @if(session('errors'))
                <div class="alert alert-danger" role="alert">
                    {{ (session('errors'))->first() }}
                </div>
            @endif
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">tujuan</label>
                <input type="text" class="form-control" id="tujuan" name="tujuan" value="{{ $surat_keluar -> tujuan }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $surat_keluar -> tanggal }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">nomer</label>
                <input type="text" class="form-control" id="nomer" name="nomer">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">kode_surat</label>
                <input type="text" class="form-control" id="kode_surat" name="kode_surat" value="{{ $surat_keluar -> kode_surat }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">perihal</label>
                <input type="text" class="form-control" id="perihal" name="perihal" value="{{ $surat_keluar -> perihal }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">nomer_petunjuk</label>
                <input type="text" class="form-control" id="nomer_petunjuk" name="nomer_petunjuk" value="{{ $surat_keluar -> nomer_petunjuk }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">keterangan</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $surat_keluar -> keterangan }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">file</label>
                <input type="file" class="form-control" id="file"  name="file" accept="aplication/msword, application/pdf">
            </div>


        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
