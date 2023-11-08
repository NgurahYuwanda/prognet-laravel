<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="form/create" method="get">
        <button type="submit">Tambah Data</button>
    </form>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Telepon</th>
            <th>Program Studi</th>
            <th>Alamat</th>
            <th>Keterangan</th>
        </tr>
        @foreach ($data as $form)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $form->nama }}</td>
            <td>{{ $form->nim }}</td>
            <td>{{ $form->jenis_kelamin }}</td>
            <td>{{ $form->agama }}</td>
            <td>{{ $form->telepon }}</td>
            <td>{{ $form->prodi }}</td>
            <td>{{ $form->alamat }}</td>
            <td>
                <form action="/form/{{ $form->id }}/edit" method="get">
                    <button type="submit">Edit</button>
                </form>
                <form action="/form/{{ $form->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>