<!DOCTYPE html>
<html>
<head>
    <title>Pelanggan</title>
</head>
<body>
    Data Pelanggan:
    <ul>
    @foreach ($datas as $data)
        <li> Nama Pelanggan: {{ $data }}</li>
    @endforeach</ul>
</body>
</html>