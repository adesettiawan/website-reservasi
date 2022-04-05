@extends('layouts.app')


@section('style')
@include('layouts.style')
@endsection


@section('content')
<div class="black"></div>
<div class="top-bar" style="margin-bottom: 80px">
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
<div class="row ms-0">
  <div class="col-3 form-pemesan py-5 px-4">
    <div class="position-fixed">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="text-white form-label">Nama Pemesan</label>
        <input type="text" nama="nama" id="nama" class="form-control" placeholder="Nama pemesan.." required>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="text-white form-label">No. Telepon</label>
        <input type="number" nama="telp" id="telp" class="form-control" placeholder="No. Telepon.." required>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="text-white form-label">Tanggal Pemesanan</label>
        <input type="datetime-local" nama="tgl_reservasi" id="tgl_reservasi" class="form-control"
          placeholder="Tanggal Pemesanan.." required>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="text-white form-label">Jumlah Orang</label>
        <input type="number" nama="jml_orang" id="jml_orang" class="form-control" placeholder="Jumlah Orang.." required>
      </div>
      <div class="mb-3">
        <label for="meja" class="form-label text-white">Pilih No. Meja</label>
        @if($dtmeja)
        <select name="meja" class="form-select" id="meja">
          <option value="">Pilih meja</option>
          @foreach($dtmeja as $meja)
          <option value="{{ $meja->id }}">{{ $meja->no_meja }}</option>
          @endforeach
          @else
          <input type="text" value="Sudah Penuh" disabled>
          @endif
        </select>
      </div>
    </div>
  </div>

  <div class="col-9 menu-makan example" style="padding-top: 50px; padding-bottom: 110px">
    @foreach($dtkat as $kat)
    @if ($kat->jumlah > 0)
    <h3 class="text-left">Menu &nbsp;{{ $kat->nama_kategori }}</h3>

    <div class="container menu_makanan">
      @foreach($dtmenu as $menu)
      @if($menu->kategori_id == $kat->id)
      <div class="card">
        <img src="{{ Storage::url($menu->foto) }}" class="card-img-top" style="width: 100%; height: 190px"
          alt="{{ $menu->nama_menu }}">
        <div class="card-body makan" data-id="{{ $menu->id }}">
          <h5 class="card-title" data-foto="{{ $menu->foto }}">{{ $menu->nama_menu }}</h5>
          <p class="card-text">Rp. &nbsp;{{$menu->harga}}</p>
          <button class="btn" style="margin-top: 20px; background: #fb5849;color: #fff">+ Pesan</button>
          <div class="tambah_pesan">
            <button class="btn kurang" style="background: #fb5849;color: #fff"> - </button>
            <input type="text" value="1" class="qty-pesan" readonly>
            <button class="btn tambah" style="background: #0c4d1d;color: #fff"> + </button>
          </div>
        </div>
      </div>
      @endif
      @endforeach
    </div>
    @endif
    @endforeach
  </div>
</div>
<div class="bar-order">
  <button id="back" class="btn text-white" style="background: #0000e3;font-size: 14px">Kembali</button>
  <button class="btn btn-success" style="font-size: 14px" id="next">Lanjut</button>
</div>

@endsection


@section('script')
<!-- Optional JavaScript; choose one of the two! -->
@include('layouts.script')
<script src="{{ asset('js/menu.js') }}"></script>
@endsection