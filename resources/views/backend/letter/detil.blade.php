<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container p-5">
        <h1>Detil</h1>
        <table class="table">
            <tbody>
                <tr>
                    <td>Judul Buku</td>
                    <td>{{ $book->judul_buku }}</td>
                </tr>
                <tr>
                    <td>Pengarang</td>
                    <td>{{ $book->pengarang }}</td>
                </tr>
                <tr>
                    <td>Penerbit</td>
                    <td>{{ $book->penerbit }}</td>
                </tr>
                <tr>
                    <td>Tahun Terbit</td>
                    <td>{{ $book->tahun_terbit }}</td>
                </tr>
                <tr>
                    <td>Descripsi</td>
                    <td>{{ $book->descripsi }}</td>
                </tr>
                <tr>
                    <td>Foto</td>
                    <td>
                        <img src="http://localhost:8000{{ Storage::url($book->foto) }}" alt="" width="100">
                    </td>
                </tr>
                <tr>
                    <td>Create At</td>
                    <td>{{ $book->created_at }}</td>
                </tr>
                <tr>
                    <td>Update At</td>
                    <td>{{ $book->updated_at }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>