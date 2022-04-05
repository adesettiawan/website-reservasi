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
    <div class="col-lg-4">
      <div class="card card-chart">
        <div class="card-header">
          <h5 class="card-category">Data</h5>
          <h4 class="card-title">Pesanan</h4>
        </div>
        <div class="card-body">
          <p class="text-center" style="font-size: 70px">{{ $data_pesan }}</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="card card-chart">
        <div class="card-header">
          <h5 class="card-category">Data</h5>
          <h4 class="card-title">Meja</h4>
        </div>
        <div class="card-body">
          <p class="text-center" style="font-size: 70px">{{ $data_meja }}</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="card card-chart">
        <div class="card-header">
          <h5 class="card-category">Data</h5>
          <h4 class="card-title">Menu</h4>
        </div>
        <div class="card-body">
          <p class="text-center" style="font-size: 70px">{{ $data_menu }}</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="card card-chart">
        <div class="card-header">
          <h5 class="card-category">Data</h5>
          <h4 class="card-title">Kategori</h4>
        </div>
        <div class="card-body">
          <p class="text-center" style="font-size: 70px">{{ $data_kategori }}</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
@include('admin.script')
@endsection