@extends('layouts.app')
@section('content')
    <div class="container-sm my-4">
        <div class="row justify-content-center">
            <div class="px-5 pt-4 pb-5 bg-body-secondary rounded-3 col-xl-5 border">
                <div class="mb-3 text-center">
                    <i class="bi bi-box-seam fs-1"></i>
                    <h4>Detail Barang</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <label for="list_barang" class="form-label">Kode Barang</label>
                        <h5>{{ $list_barang->kode_barang }}</h5>
                    </div>
                    <div class="col-md-12 mb-2">
                        <label for="lastName" class="form-label">Nama Barang</label>
                        <h5>{{ $list_barang->nama_barang }}</h5>
                    </div>
                    <div class="col-md-12 mb-2">
                        <label for="harga_barang" class="form-label">Harga Barang</label>
                        <h5>{{ $list_barang->harga_barang }}</h5>
                    </div>
                    <div class="col-md-12 mb-2">
                        <label for="deskripsi_barang" class="form-label">Deskripsi Barang</label>
                        <h5>{{ $list_barang->deskripsi_barang }}</h5>
                    </div>
                    <div class="col-md-12 mb-2">
                        <label for="satuan" class="form-label">Satuan Barang</label>
                        <h5>{{ $list_barang->satuan->nama_satuan }}</h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="{{ route('list_barang.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                class="bi-arrow-left-circle
me-2"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
