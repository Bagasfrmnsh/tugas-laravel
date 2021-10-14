<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
<h2>Data Siswa Assalaam :</h2>
    <ul>
        @foreach( $data as $data2)
        Nis       :{{ $data2['nis'] }}<br>
        Nama    :{{ $data2['nama'] }}<br>
        Jenis Kelamin :{{ $data2['jk'] }}<br>
        Jurusan :{{ $data2['jurusan'] }}<br>
        Kelas :{{ $data2['kelas'] }}<br>
        Wali Kelas :{{ $data2['wakel'] }}<br>
    <hr>

        @endforeach
    </ul>
</body>
</html>