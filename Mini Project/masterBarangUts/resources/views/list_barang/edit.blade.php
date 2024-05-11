@extends('layouts.app')
@section('content')
    <div class="container-sm mt-5">
        <form action="{{ route('list_barang.update', $list_barang->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row justify-content-center">
                <div class="p-5 bg-body-secondary rounded-3 border col-xl-6">
                    <div class="mb-3 text-center">
                        <i class="bi bi-box-seam fs-1"></i>
                        <h4>Edit Barang</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kode_barang" class="form-label">Kode Barang</label>
                            <input class="form-control @error('kode_barang') is-invalid @enderror" type="text"
                                name="kode_barang" id="kode_barang" value="{{ $list_barang->kode_barang }}"
                                placeholder="Enter First Name">
                            @error('kode_barang')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="nama_barang" class="form-label">Nama Barang</label>
                            <input class="form-control @error('nama_barang') is-invalid @enderror" type="text"
                                name="nama_barang" id="nama_barang" value="{{ $list_barang->nama_barang }}"
                                placeholder="nama_barang">
                            @error('nama_barang')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="harga_barang" class="form-label">Harga Barang</label>
                            <input class="form-control @error('harga_barang') is-invalid @enderror" type="text"
                                name="harga_barang" id="harga_barang" value="{{ $list_barang->harga_barang }}"
                                placeholder="harga_barang">
                            @error('harga_barang')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="deskripsi_barang" class="form-label">Deskripsi Barang</label>
                            <input class="form-control @error('deskripsi_barang') is-invalid @enderror" type="text"
                                name="deskripsi_barang" id="deskripsi_barang" value="{{ $list_barang->deskripsi_barang }}"
                                placeholder="deskripsi_barang">
                            @error('deskripsi_barang')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="satuan" class="form-label">Satuan</label>
                            <select name="satuan" id="satuan" class="form-select">
                                @foreach ($list_satuan as $list_satuan)
                                    <option value="{{ $list_satuan->id }}"
                                        {{ old('satuan') == $list_satuan->id ? 'selected' : '' }}>
                                        {{ $list_satuan->kode_satuan . ' - ' . $list_satuan->nama_satuan }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('list_barang.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                    class="bi-arrow-left-circle me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                                Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
