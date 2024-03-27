@extends('master')

@section('konten')
<h3>Tampil Data Product</h3>
<a class="btn btn-success" href="{{route('tambahsantri')}}"><i class="fa fa-plus"></i> Tambah Santri</a><br><br>
<table class="table table-bordered table-hover">
  <tr>
    <th>#ID</th>
    <th>Nama Product</th>
    <th>Product Description</th>
    <th>Category</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Aksi</th>
  </tr>
  @foreach($products as $p) 
  <tr>
    <td>{{$p->id_product}}</td>
    <td>{{$p->nm_product}}</td>
    <td>{{$p->desc_product}}</td>
    <td>{{$p->category}}</td>
    <td>{{$p->price}}</td>
    <td>{{$p->quantity}}</td>
    <td>
      <a href="/product/ubah/{{$p->id_product}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
      <a href="/product/hapus/{{$p->id_product}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
    </td>
  </tr>
  @endforeach
</table>
@endsection