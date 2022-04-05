@extends('layouts.app')


@section('style')
@include('layouts.style')
@endsection

@section('content')
@csrf
<div class="black"></div>

<div class="top-bar" style="margin-bottom: 140px">
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo mr-5">
                            <img src="{{ url('frontend-assets/images/dijou1.png') }}" alt="Dijou caffe">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/" class="active">Home</a></li>

                            <li class="scroll-to-section">
                                <a href="{{ route('reservasi') }}">Buat Reservasi</a>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
</div>

<div class="listpesan" style="padding-bottom: 110px">
    <div class="pemesan d-flex justify-content-start mt-3">
        <p id="nama" class="me-2" style="font-size: 17px"></p> /
        <p id="no_meja" class="ms-2" style="font-size: 17px"></p>


    </div>
    <div id="daftar">

    </div>
</div>

<div class="bar-order justify-content-between">
    <a href="/pesan" class="btn btn-warning text-white">Ubah pesanan</a>
    <div class="a">
        <span id="total-bayar" class="text-white"></span>
        <button id="bayar" class="btn btn-success ms-3">Pemesanan</button>
    </div>
</div>
@endsection

@section('script')
<!-- Optional JavaScript; choose one of the two! -->
@include('layouts.script')
<script src="{{ asset('js/pembayaran.js') }}"></script>

@endsection