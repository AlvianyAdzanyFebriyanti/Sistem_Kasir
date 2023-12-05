@extends('home')

@section('list')
<div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic Table</h4>
        <p class="card-description">
          Add class <code>.table</code>
        </p>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Jenis Barang</th>
                <th>QTY</th>
                <th>Harga</th>
                <th>Total</th>
                <th>Diskon</th>
                <th>Total Terbaru</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data_product as $key)
              <tr>
                <td>{{ $key -> Kode_Barang}}</td>
                <td>{{ $key -> Nama_Barang}}</td>
                <td>{{ $key -> Jenis_Barang}}</td>
                <td>{{ $key -> QTY}}</td>
                <td>{{ $key -> Harga}}</td>
                <td>{{ $key -> Total}}</td>
                <td>{{ $key -> Diskon}}</td>
                <td>{{ $key -> Total_Terbaru}}</td>
                <td> 
                    <button type="button" onclick="window.location.href='{{url('edit/'.$key->Kode_Barang)}}';" class="btn btn-warning">Edit</button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  @endsection