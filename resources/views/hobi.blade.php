<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Laravel array</title>
</head>
<body>
    <ul>
        @foreach($hobis as $data)
        nis : {{$data['nis']}}<br>
        nama : {{$data['nama']}}<br>
        kelas : {{$data['kelas']}}<br>

        hobi :
        <ul>
            @foreach($data['hobi'] as $hobi)
                <li>{{$hobi}}</li>
                @endforeach
                <hr>
        </ul>
    
    @endforeach
    </ul>
</body>
</html>