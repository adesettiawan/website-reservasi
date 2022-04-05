@extends('admin.app')

@section('style')
@include('admin.style')
<style>
  #foto_menu,
  #foto_menu_up {
    opacity: 1;
    position: static;
  }
</style>
@endsection

@section('content')
<!-- End Navbar -->
{{-- <div class="panel-header panel-header-lg">
  <canvas id="bigDashboardChart"></canvas>
</div> --}}
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between">
          <h4 class="card-title">Data Menu</h4>
          <button class="btn btn-primary" id="btn-Tambah-menu" data-toggle="modal" data-target="#exampleModalCenter"> <i
              class="fas fa-plus"></i> Tambah menu</button>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>Foto</th>
                <th>Nama</th>
                <th>
                  Harga
                </th>
                <th>
                  Kategori
                </th>
                <th class="text-center">
                  Aksi
                </th>
              </thead>
              <tbody>
                @foreach($datamenu as $menu)
                <tr>
                  <td style="display: none">{{ $menu->id }}</td>
                  <td>
                    <img src="{{ asset('storage/' . $menu->foto) }}" style="width:150px; height:100px;"
                      alt="{{ $menu->nama_menu }}">
                  </td>
                  <td>{{ $menu->nama_menu }}</td>
                  <td>Rp {{ $menu->harga }}</td>
                  <td>{{ $menu->kategori->nama_kategori }}</td>
                  <td class="d-flex justify-content-center">
                    <button class="btn btn-sm btn-warning edit-menu mr-2" data-toggle="modal"
                      data-target="#exampleModalCenter">Edit</button>
                    <form class="hapus-menu" dt-id="{{ $menu->id }}" dt-nama="{{ $menu->nama_menu }}">
                      @csrf
                      <button class="btn btn-sm btn-danger" type="submit">hapus</button>
                    </form>
                  </td>
                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="title-modal"></h5>
        <button type="button" class="close tutup-modal" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/admin/tambah_menu" method="POST" enctype="multipart/form-data" id="form_tambah_menu"
        style="display: none;">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label for="nama_menu">Nama Menu</label>
            <input type="text" class="form-control" name="nama_menu" id="nama_menu" placeholder="masukkan nama menu.. ">
          </div>
          <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" class="form-control" name="harga" id="harga" placeholder="masukkan Harga menu.. ">
          </div>
          <div class="form-group">
            <label for="kategori">Kategori</label>
            <select class="form-control" name="kategori_id" id="kategori">
              <option value="">Pilih kategori</option>
              @foreach($datakategori as $kategori)
              <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="foto_menu ">Foto menu</label>
            <input type="file" id="foto_menu" name="foto">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary tutup-modal" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
      <form method="POST" enctype="multipart/form-data" id="form_edit_menu" style="display: none;">
        @csrf
        @method('PUT')
        <div class="modal-body">
          <div class="form-group">
            <label for="nama_menu">Nama Menu</label>
            <input type="text" class="form-control" name="nama_menu" id="nama_menu_up"
              placeholder="masukkan nama menu.. ">
          </div>
          <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" class="form-control" name="harga" id="harga_up" placeholder="masukkan Harga menu.. ">
          </div>
          <div class="form-group">
            <label for="kategori">Kategori</label>
            <select class="form-control" name="kategori_id" id="kategori_up">
              <option value="">Pilih kategori..</option>
              @foreach($datakategori as $kategori)
              <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="foto_menu ">Foto menu</label>
            <input type="file" id="foto_menu_up" name="foto">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary tutup-modal" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
@section('script')
@include('admin.script')
<script src="{{ asset('js/admin/menu.js') }}"></script>

@endsection