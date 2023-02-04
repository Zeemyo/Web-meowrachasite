@extends('artikel/template/app')

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Konsultasi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }
    </style>
</head>
<br>
<br>

<br>

<body>



    <div class="container text-center">


        <div class="row">
            @foreach ($konsultasi as $row)
                <div class="col-sm-3">
                    <div class="well" style="width: auto; height: auto">
                        <img src="/upload/post/{{ $row->image }}" class="img-circle" style="width: 70px; height: 70px"
                            alt="Avatar"></a>
                        <p><b>{{ $row->nama_konsultan }}</b></p>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="well" style="width: auto; height: auto">
                        <p>{{ $deskripsi = substr($row->deskripsi, 0, 80) }}...</p>
                        <p>{{ $row->kontak }}</p>
                        <a href="https://wa.me/{{ $row->kontak }}" class="btn btn-primary">Contact
                            Me</a>

                    </div>
                </div>
        </div>
        @endforeach

    </div>

</body>

</html>
