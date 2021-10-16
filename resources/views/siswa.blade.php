<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach($siswas as $data)
        id : {{$data['id']}}<br>
        nama : {{$data['nama']}}<br>
        username : {{$data['username']}}<br>
        email : {{$data['email']}}<br>
        alamat : {{$data['alamat']}}<br>

        mata pelajaran :
        <ul>
            @foreach($data['mapel'] as $mapel)
                <li>{{$mapel}}</li>
                @endforeach
        </ul>
        <hr>
    @endforeach
    </ul>
</body>
</html>