<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($film as $data)
    id:{{$data['id']}}<br>
    judul:{{$data['judul']}}<br>
    sinopsis:{{$data['sinopsis']}}<br>
    penulis:{{$data['penulis']}}<br>
    bahasa:{{$data['bahasa']}}<br>
    aktor:
    @foreach($data['aktor'] as $aktor)
    <li>{{$aktor}}</li>
    @endforeach
    <hr>
    @endforeach
</body>
</html>