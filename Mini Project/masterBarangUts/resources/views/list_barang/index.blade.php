@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3">List Barang</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class=" gap-2">
                    <a href="{{ route('list_barang.create') }}" class="btn
                    btn-outline-secondary">Tambahkan Barang</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped
mb-0 bg-white table-secondary">
                <thead>
                    <tr class="text-center">
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Deskripsi Barang</th>
                        <th>Satuan Barang</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list_barang as $list_barang)
                        <tr>
                            <td>{{ $list_barang->kode_barang }}</td>
                            <td>{{ $list_barang->nama_barang }}</td>
                            <td>Rp. {{ $list_barang->harga_barang }}</td>
                            <td>{{ $list_barang->deskripsi_barang }}</td>
                            <td>{{ $list_barang->satuan->kode_satuan }} - {{ $list_barang->satuan->nama_satuan }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('list_barang.show', ['list_barang' => $list_barang->id]) }}"
                                        class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
                                    <a href="{{ route('list_barang.edit', ['id' => $list_barang->id]) }}"
                                        class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>
                                    <div>
                                        <form
                                            action="{{ route('list_barang.destroy', ['list_barang' => $list_barang->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit"
                                                class="btn
                btn-outline-dark btn-sm me-2"><i
                                                    class="bi-trash"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
