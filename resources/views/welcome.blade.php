<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Caffe talk</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ribeye+Marrow&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(180.31deg, #FFFFFF 41.9%, #C98826 108.55%);
            width: 100vw;
            height: 100vh;
        }

        * {
            overflow: hidden;
            margin: 0;
            padding: 0;
        }

        .container {
            text-align: center;
            margin-top: 20px;
        }

        .container hr {
            width: 700px;
            margin: auto;
        }

        .title {
            font-family: 'Ribeye Marrow';
            font-size: 50px;
        }

        .menu {
            display: flex;
            justify-content: space-around;
            margin: 20px 180px;
            padding: 10px;
        }

        .box {
            background: conic-gradient(from 205.14deg at 53.76% 50%, rgba(236, 176, 105, 0.51) -108.56deg, rgba(255, 195, 124, 0.4) 136.08deg, rgba(236, 176, 105, 0.51) 251.44deg, rgba(255, 195, 124, 0.4) 496.08deg);
            border-radius: 39px;
            text-align: center;
            padding: 50px;
            padding-bottom: 30px;
            transition: background 5s;
        }

        .menu .box:first-child {
            box-shadow: -6px 7px 8px -3px rgba(117, 77, 26, 0.48);
        }

        .menu .box:last-child {
            box-shadow: 7px 7px 8px -3px rgba(117, 77, 26, 0.48);
        }

        .box img {
            width: 150px;
            height: 150px;
            margin-bottom: 10px;
            transition: all .5s ease-out;
        }

        .box p {
            font-size: 30px;
            color: black;
        }

        a {
            text-decoration: none;
        }

        .box:hover {
            background: conic-gradient(from 166.24deg at 50% 50%, rgba(173, 101, 17, 0.96) -166.06deg, rgba(189, 163, 24, 0.74) 10.19deg, rgba(173, 101, 17, 0.96) 193.94deg, rgba(189, 163, 24, 0.74) 370.19deg);
        }

        .box:hover img {

            width: 200px;
            height: 200px;

        }
    </style>
</head>

<body>
    <div class="container">
        <img src="https://d1sag4ddilekf6.azureedge.net/compressed/merchants/6-C2XYG4NHTYTXVX/hero/bf27cc9b009b407daf70b6e4ede3612e_1629547798731923560.jpg"
            width="150px" alt="logo">
        <p class="title">Dijou Caffe</p>
        <hr>
    </div>
    <div class="menu">
        <a href="/login" class="box">
            <img src="{{ asset('img/admin.png') }}" alt="admin">
            <p class="text">Admin</p>
        </a>
        <a href="/pesan" class="box">
            <img src="{{ asset('img/Kasir.png') }}" alt="Kasir">
            <p>Kasir</p>
        </a>
    </div>
</body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@error('warning')
<script>
    Swal.fire(
        {{ $errors->first('warning') }},
        'klik tombol dibawah',
        'warning'
    )

</script>

@enderror

</html>