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
        <div class="card-header d-flex justify-content-between">
          <h4 class="card-title">Data Meja</h4>
          <button class="btn btn-primary" id="btn-Tambah-meja" data-toggle="modal" data-target="#exampleModalCenter"> <i
              class="fas fa-plus"></i> Tambah meja</button>

        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  No. Meja
                </th>
                <th class="text-center">
                  Status
                </th>
                <th class="text-center">
                  Aksi
                </th>
              </thead>
              <tbody>
                @foreach($datameja as $meja)
                <tr>
                  <td style="display: none;">{{ $meja->id }}</td>
                  <td>{{ $meja->no_meja }}</td>
                  <td align="center">
                    <div class="badge {{ ($meja->status == 'Tersedia') ? 'badge-success' : 'badge-danger' }}">
                      {{ $meja->status }}
                    </div>
                  </td>
                  <td class="d-flex justify-content-center">
                    <button class="btn btn-sm btn-warning mr-2 edit-meja" data-toggle="modal"
                      data-target="#exampleModalCenter">Edit</button>
                    <form class="hapus-meja" data-nomor="{{ $meja->no_meja }}" data-id="{{ $meja->id }}">
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
      <form id="FormMeja">
        @csrf
        <div class="modal-body">
          <input type="hidden" class="form-control" name="idmeja" id="idmeja">
          <div class="form-group">
            <label for="no_meja">No Meja</label>
            <input type="number" class="form-control" name="no_meja" id="no_meja" placeholder="masukkan nomor meja..">
            <span class="text-success" style="display: none">nomor meja bisa digunakan</span>
            <span class="text-danger" style="display: none">nomor meja Sudah ada</span>

          </div>
          <p class="m-0">Status</p>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="status" id="status1" value="Tidak Tersedia">
            <label class="form-check-label p-0" for="status1">Tidak Tersedia</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="status" id="status2" value="Tersedia">
            <label class="form-check-label p-0" for="status2">Tersedia</label>
          </div> <br>
          <span class="text-danger" style="display: none">status harus dipilih</span>
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
<script src="{{ asset('js/admin/meja.js') }}"></script>

@endsection