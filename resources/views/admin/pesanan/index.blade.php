@extends('admin.app')

@section('style')
@include('admin.style')
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
        <div class="card-header">
          <h4 class="card-title">Data Pesanan</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table" style="overflow-x:auto;">
              <thead class="text-primary">
                <th style="font-size: 17px">
                  Nama
                </th>
                <th style="font-size: 17px">
                  No. Telp
                </th>
                <th style="font-size: 17px">
                  No. Meja
                </th>
                {{-- <th style="font-size: 17px">
                  Tgl pesan
                </th> --}}
                <th style="font-size: 17px">
                  Tgl Datang
                </th>
                {{-- <th style="font-size: 17px">
                  Jumlah Orang
                </th> --}}
                <th style="font-size: 17px">
                  Pesanan
                </th>
                <th style="font-size: 17px">
                  Status
                </th>
                <th style="font-size: 17px">
                  Total
                </th>
                <th class="text-center" style="font-size: 17px">
                  Aksi
                </th>
              </thead>
              <tbody>
                @foreach($dtpesan as $pesan)
                <tr>
                  <td>{{ $pesan->nama_pemesan }}</td>
                  <td>{{ $pesan->telp }}</td>
                  <td>
                    {{ $pesan->meja->no_meja }}
                  </td>
                  {{-- <td>{{ $pesan->tgl_pesan }}</td> --}}
                  <td>{{ $pesan->tgl_reservasi }}</td>
                  {{-- <td>{{ $pesan->jml_orang }}</td> --}}
                  <td>
                    @foreach($pesan->menupesan as $order)
                    {{ $order->menu->nama_menu }}(x{{ $order->qty }})
                    <br>
                    @endforeach
                  </td>
                  @if ($pesan->status_bayar != 1)
                  <td>
                    <span class="badge badge-success">Sudah Bayar</span>
                  </td>
                  @else
                  <td>
                    <span class="badge badge-success">Belum Bayar</span>
                  </td>
                  @endif
                  <td>Rp. {{ number_format( $pesan->Total, 0, ',','.'); }}</td>
                  <td class="d-flex justify-content-center">
                    <button class="btn btn-sm btn-primary mr-2" data-toggle="modal"
                      data-target="#exampleModalCenter{{ $pesan->id }}"><i class="fa fa-eye"></i></button>
                    @if ($pesan->status_bayar ==1)
                    <button class="btn btn-sm btn-warning mr-2 edit-pembayaran" data-id="{{$pesan->id}}"
                      data-nama="{{$pesan->status_bayar}}" data-toggle="modal" data-target="#exampleModalCenter"><i
                        class="fa fa-pencil"></i></button>
                    @endif
                    <form class="hapus-pesan" data-id="{{$pesan->id}}" data-nama="{{$pesan->nama_pemesan}}">
                      @csrf
                      <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
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
      <form id="FormPesananEdit">
        @csrf
        <div class="modal-body">
          <input type="hidden" class="form-control" name="idPesanan" id="idPesanan">
          <div class="form-group">
            <span class="text-success" style="display: none">Status Pembayaran Sudah Dibayar!!</span>
            <span class="text-danger" style="display: none">Status Pembayaran Belum Dibayar!!</span>

          </div>
          <p class="mb-2">Status Pembayaran</p>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="status_bayar" id="status1" value="1">
            <label class="form-check-label p-0" for="status1">Belum Bayar</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="status_bayar" id="status2" value="2">
            <label class="form-check-label p-0" for="status2">Sudah Bayar</label>
          </div> <br>
          <span class="text-danger" style="display: none">Status pembayaran harus dipilih</span>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary tutup-modal" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

{{-- modal detail data --}}
@foreach($dtpesan as $pesan)
<div class="modal fade" id="exampleModalCenter{{ $pesan->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="font-size: 15px">Detail Pesanan <strong>{{
            $pesan->nama_pemesan }}</strong>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label class="col-form-label">Nama Pemesan</label>
          <input type="text" class="form-control" value="{{ $pesan->nama_pemesan }}" readonly>
        </div>
        <div class="form-group">
          <label class="col-form-label">No. Telepon</label>
          <input type="text" class="form-control" value="{{ $pesan->telp }}" readonly>
        </div>
        <div class="form-group">
          <label class="col-form-label">No. Meja</label>
          <input type="text" class="form-control" value="{{ $pesan->meja->no_meja }}" readonly>
        </div>
        <div class="form-group">
          <label class="col-form-label">Tanggal Order</label>
          <input type="text" class="form-control" value="{{ $pesan->tgl_pesan }}" readonly>
        </div>
        <div class="form-group">
          <label class="col-form-label">Tanggal Datang</label>
          <input type="text" class="form-control" value="{{ $pesan->tgl_reservasi }}" readonly>
        </div>
        <div class="form-group">
          <label class="col-form-label">Jumlah Orang</label>
          <input type="text" class="form-control" value="{{ $pesan->jml_orang }}" readonly>
        </div>
        <div class="form-group">
          <label class="col-form-label">Pesanan</label>
          @foreach($pesan->menupesan as $order)
          <input type="text" class="form-control mb-2" value="{{ $order->menu->nama_menu }}(x{{ $order->qty }})"
            readonly>
          @endforeach
        </div>
        <div class="form-group">
          <label class="col-form-label">Status Bayar</label>
          <input type="text" class="form-control"
            value="{{ $pesan->status_bayar != 1 ? 'Sudah Bayar' : 'Belum Bayar' }}" readonly>
        </div>
        <div class="form-group">
          <label class="col-form-label">Total Bayar</label>
          <input type="text" class="form-control" value="Rp. {{ number_format( $pesan->Total, 0, ',','.'); }}" readonly>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach

@endsection
@section('script')
@include('admin.script')
<script src="{{ asset('js/admin/pesanan.js') }}"></script>
@endsection