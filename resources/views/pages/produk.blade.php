@extends('layouts.template')

@section('content')
  <div class="container mt-2">
    <div class="card">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NAMA BARANG</th>
      <th scope="col">HARGA</th>
      <th scope="col">STOK</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Laptop acus</td>
      <td>18.000.000</td>
      <td>10</td>
      <td>
        <button type="button" class="btn btn-danger">Hapus</button>
        <button type="button" class="btn btn-warning">Edit</button>
      </td>
    </tr>
    
  </tbody>
</table>
    </div>
  </div>
    @endsection