<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1" borderspacing="0">
        <thead>
            <tr>
                <th>nik</th>
                <th>nama</th>
                <th>telp</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bebas as $iyem)
                <tr>
                    <td>{{$iyem->nik}}</td>
                    <td>{{$iyem->nama}}</td>
                    <td>{{$iyem->telp}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>