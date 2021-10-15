<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($books as $data)
    id:{{$data['id']}}<br>
    Tittle:{{$data['tittle']}}<br>
    <hr>
    @endforeach
</body>
</html>