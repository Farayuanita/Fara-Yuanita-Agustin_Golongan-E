<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Biodata Mahasiswa</title>
</head>
<body>
    <h1>Biodata Mahasiswa</h1>
    <ul>
        <li>Nama: {{ $mhs['nama'] }}</li>
        <li>NIM: {{ $mhs['nim'] }}</li>
        <li>Golongan: {{ $mhs['golongan'] }}</li>
        <li>Jurusan: {{ $mhs['jurusan'] }}</li>
        <li>Prodi: {{ $mhs['prodi'] }}</li>

    </ul>
</body>
</html>
