<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nama</title>
</head>
<body>
    <fieldset>
        <legend>Biodata Bro</legend>
        <table>
        @if ($a == null)
        Silahkan Isi Biodata Terlebih Dahulu
        @elseif ($a != null)
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{$a}}</td>
        </tr>
        @endif

        @if ($b != null)
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>{{$b}}</td>
        </tr>
        @endif

        @if ($c != null)
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>{{$c}}</td>
        </tr>
        @endif

        @if ($d != null)
        <tr>
            <td>Tinggi Badan</td>
            <td>:</td>
            <td>{{$d}}</td>
        </tr>
        @endif

        @if ($e != null)
        <tr>
            <td>Berat Badan</td>
            <td>:</td>
            <td>{{$e}}</td>
        </tr>
        @endif
</table>
</fieldset>
</body>
</html>
