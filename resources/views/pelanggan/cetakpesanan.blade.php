<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=100px, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ribeye+Marrow&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        figure {
            text-align: center;
            margin: 0px;
            margin-top: 40px;
        }

        img {
            width: 120px;
        }

        .title {
            text-align: center;
            font-family: 'Ribeye Marrow';
            font-size: 40px;
            margin: 0;
        }

        .alamat {
            text-align: center;
            margin: 0;
            font-size: 22px;
        }

        .pos {
            margin: auto;

        }

        hr {
            margin: auto;
            width: 681px;
            border: 1px dashed #000000;
        }

        .Order {
            text-align: center;
            font-size: 25px;
        }

        .table-pesanan {
            margin: auto;
            font-size: 22px;
        }

        .table-total {
            margin: auto;

            font-size: 22px;

        }

        .thanks {
            margin-top: 20px;
            font-size: 25px;
            text-align: center;
        }
    </style>
</head>

<body>
    <figure>
        <img src="https://d1sag4ddilekf6.azureedge.net/compressed/merchants/6-C2XYG4NHTYTXVX/hero/bf27cc9b009b407daf70b6e4ede3612e_1629547798731923560.jpg"
            width="150" alt="dijou">
        {{-- <img src="{{ asset('img/pandalogo.png') }}" alt="pandaman"> --}}
    </figure>
    <p class="title">Dijou Caffe</p>
    <p class="alamat" style="font-size: 20px; margin-top: 10px">Jl. Hos Cokroaminoto No.95, Rw. Laut, Kec. Tanjungkarang
        Timur, Kota Bandar Lampung, Lampung
        35213.</p>
    <table class="pos" style="margin-top: 30px; margin-bottom: 5px">
        <tr>
            <td style="text-align:right; width:630px;">Title:</td>
            <td align="right" style="width: 50px;">Pemesanan</td>
        </tr>
    </table>
    <hr>
    {{-- <p class="Order" style="margin-top: 10px;">Order By: {{ $dtpemesan->nama_pemesan }} <br> No. Meja: {{
        $dtpemesan->meja->no_meja }} <br> Order
        Date: {{ $dtpemesan->tgl_pesan }}</p> --}}
    <table class="table-pesanan" style="padding: 20px 0px">
        <tr class="tr-head" style="font-size: 20px;">
            <th style="width: 370px; text-align:left">Nama Pemesan: </th>
            <th style="width: 310px; font-weight: 500;text-align:right">{{ $dtpemesan->nama_pemesan }}</th>
        </tr>
        <tr class="tr-head" style="font-size: 20px;">
            <th style="width: 380px; text-align:left">No. Meja: </th>
            <th style="width: 300px; font-weight: 500;text-align:right">No.&nbsp;{{ $dtpemesan->meja->no_meja }}</th>
        </tr>
        <tr class="tr-head" style="font-size: 20px;">
            <th style="width: 380px; text-align:left">Jumlah Orang: </th>
            <th style="width: 300px; font-weight: 500;text-align:right">{{ $dtpemesan->jml_orang }}&nbsp;Orang</th>
        </tr>
        <tr class="tr-head" style="font-size: 20px;">
            <th style="width: 380px; text-align:left">Tgl Datang: </th>
            <th style="width: 300px; font-weight: 500;text-align:right">{{ $dtpemesan->tgl_reservasi }}</th>
        </tr>
        <tr class="tr-head" style="font-size: 20px;">
            <th style="width: 370px; text-align:left">Tgl Order: </th>
            <th style="width: 310px; font-weight: 500;text-align:right">{{ $dtpemesan->tgl_pesan }}</th>
        </tr>
    </table>
    <hr>
    <hr style="margin-top: 4px">
    <table class="table-pesanan">
        <tr class="tr-head">
            <th style="width: 380px; text-align:left">Pesanan</th>
            <th style="width: 150px;">Harga</th>
            <th>QTY</th>
            <th style="text-align:right; width: 100px;">Total</th>
        </tr>
        @foreach($dtpemesan->menupesan as $pesan)
        <tr>
            <td>{{ $pesan->menu->nama_menu }}</td>
            <td align="center">Rp {{ $pesan->menu->harga }}</td>
            <td align="center">{{ $pesan->qty }}</td>
            <td align="right">Rp {{ $pesan->menu->harga*$pesan->qty}}</td>
        </tr>
        @endforeach
    </table>
    <hr>
    <table class="table-total">
        <tr>
            <th style="width: 530px; text-align: right;">Total :</th>
            <td style="width: 150px; text-align: right;">Rp {{ $dtpemesan->Total }}</td>
        </tr>
    </table>
    <hr>
    <hr style="margin-top: 4px">
    <p class="thanks" style="font-size: 20px; margin-top: 30px"> Jangan Lupa Screenshot atau Simpan Bukti Pemesanan!</p>
    <p class="thanks" style="font-size: 20px; margin-top: 5px"> Terima Kasih - Silahkan Tunjukan Bukti Pemesanan
        Reservasi Pada Kasir Caffe Dijou!</p>
</body>
<script>
    window.print();

</script>

</html>