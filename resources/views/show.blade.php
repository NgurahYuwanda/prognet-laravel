<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hasil Inputan Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Hasil Inputan Form</h2>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>Nama</th>
                    <td>{{ $nama }}</td>
                </tr>
                <tr>
                    <th>NIM</th>
                    <td>{{ $nim }}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{ $jenis_kelamin }}</td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>{{ $agama }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $alamat }}</td>
                </tr>
                <tr>
                    <th>Telepon</th>
                    <td>{{ $telp }}</td>
                </tr>
                <tr>
                    <th>Hobi</th>
                    <td>{{ $hobi }}</td>
                </tr>
                <tr>
                    <th>Program Studi</th>
                    <td>{{ $prodi }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $email }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>