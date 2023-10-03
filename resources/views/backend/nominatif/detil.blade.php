<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Guru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container p-5">
        <a href="/nominatif/view" class="btn btn-primary mb-3">Back to list</a>
        <h1>Data</h1>
        <table class="table">
            <tbody>
                
                <tr>
                    <td>Foto</td>
                    <td>
                        <img src="http://localhost:8000{{ Storage::url($employee->foto) }}" alt="" width="50">
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>{{ $employee->nama_guru }}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>{{ $employee->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <td>NIP</td>
                    <td>{{ $employee->nip }}</td>
                </tr>
                <tr>
                    <td>NUPTK</td>
                    <td>{{ $employee->nuptk }}</td>
                </tr>
                <tr>
                    <td>Status Kepegawaian</td>
                    <td>{{ $employee->status_kepegawaian }}</td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>{{ $employee->agama }}</td>
                </tr>
                
                <tr>
                    <td>Tempat Lahir</td>
                    <td>{{ $employee->tempat_lahir }}</td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>{{ $employee->tanggal }}</td>
                </tr>
                <tr>
                    <td>TMT</td>
                    <td>{{ $employee->tmt }}</td>
                </tr>
                <tr>
                    <td>Pendidikan</td>
                    <td>{{ $employee->pendidikan }}</td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>{{ $employee->jurusan }}</td>
                </tr>
                <tr>
                    <td>Ketugasan Pokok</td>
                    <td>{{ $employee->ketugasan_pokok }}</td>
                </tr>
                <tr>
                    <td>Jumlah Jam</td>
                    <td>{{ $employee->jp }}</td>
                </tr>
                <tr>
                    <td>Tugas Tambahan</td>
                    <td>{{ $employee->tugas_tambahan }}</td>
                </tr>
                <tr>
                    <td>Sertifikat Pendidik</td>
                    <td>{{ $employee->serdik }}</td>
                </tr>
                <tr>
                    <td>Telp</td>
                    <td>{{ $employee->telp }}</td>
                </tr>
                <tr>
                    <td>Create At</td>
                    <td>{{ $employee->created_at }}</td>
                </tr>
                <tr>
                    <td>Update At</td>
                    <td>{{ $employee->updated_at }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>