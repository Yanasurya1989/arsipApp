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
        <form action="/employee/update/{{ $employee->id_guru }}" method="post" enctype="multipart/form-data">
            @if(session('errors'))
                <div class="alert alert-danger" role="alert">
                    {{ (session('errors'))->first() }}
                </div>
            @endif
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">foto</label><br>
                <img src="http://localhost:8000{{ Storage::url($employee->foto) }}" alt="" width="110">
                <input type="file" class="form-control" id="foto" name="foto">
                
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">nama_guru</label>
                <input type="text" class="form-control" id="nama_guru" name="nama_guru" value="{{ $employee -> nama_guru }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">jenis_kelamin</label>
                <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{ $employee -> jenis_kelamin }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">nip</label>
                <input type="text" class="form-control" id="nip" name="nip" value="{{ $employee -> nip }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">nuptk</label>
                <input type="text" class="form-control" id="nuptk" name="nuptk" value="{{ $employee -> nuptk }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">status_kepegawaian</label>
                <input type="text" class="form-control" id="status_kepegawaian" name="status_kepegawaian" value="{{ $employee -> status_kepegawaian }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">agama</label>
                <input type="text" class="form-control" id="agama" name="agama" value="{{ $employee -> agama }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">tempat_lahir</label>
                <input type="text" class="form-control" id="tempat_lahir"  name="tempat_lahir" value="{{ $employee -> tempat_lahir }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $employee -> tanggal }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">tmt</label>
                <input type="date" class="form-control" id="tmt" name="tmt" value="{{ $employee -> tmt }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">pendidikan</label>
                <input type="text" class="form-control" id="pendidikan" name="pendidikan" value="{{ $employee -> pendidikan }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{ $employee -> jurusan }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">ketugasan_pokok</label>
                <input type="text" class="form-control" id="ketugasan_pokok" name="ketugasan_pokok" value="{{ $employee -> ketugasan_pokok }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">jp</label>
                <input type="number" class="form-control" id="jp" name="jp" value="{{ $employee -> jp }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">tugas_tambahan</label>
                <input type="text" class="form-control" id="tugas_tambahan" name="tugas_tambahan" value="{{ $employee -> tugas_tambahan }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">serdik</label>
                <input type="text" class="form-control" id="serdik" name="serdik" value="{{ $employee -> serdik }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">telp</label> 
                <input type="text" class="form-control" id="telp" name="telp" value="{{ $employee -> telp }}">
            </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>