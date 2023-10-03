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
        <form action="/skep/update/" method="post" enctype="multipart/form-data">
            @if(session('errors'))
                <div class="alert alert-danger" role="alert">
                    {{ (session('errors'))->first() }}
                </div>
            @endif
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tentang</label>
                <input type="text" class="form-control" id="tentang" name="tentang" value="{{$skep->$title}}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{$skep->$tanggal}}">
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
