@extends('layouts.app')

@section('title', 'Data Barang')

@section('contents')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('barang.tambah') }}" class="btn btn-primary mb-3">Tambah Barang</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php($no = 1)
                    @foreach ($barang as $row)
                        <tr>
                            <th>{{ $no++ }}</th>
                            <td>{{ $row->kode_barang }}</td>
                            <td>{{ $row->nama_barang }}</td>
                            <td>{{ $row->kategori_barang }}</td>
                            <td>{{ $row->harga }}</td>
                            <td>{{ $row->jumlah }}</td>
                            <td>
                                <a href="{{ route('barang.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('barang.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection