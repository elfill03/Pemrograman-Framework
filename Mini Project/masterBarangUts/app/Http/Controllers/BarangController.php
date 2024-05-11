<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Barang;
use App\Models\Satuan;

class BarangController extends Controller
{
    public function index()
    {
        $pageTitle = 'List Barang';

        $list_barang = Barang::all();

        return view('list_barang.index', ['pageTitle' => $pageTitle, 'list_barang' => $list_barang]);
    }

    public function create()
    {
        $pageTitle = 'Buat Barang';

        $list_satuan = Satuan::all();

        return view('list_barang.create', compact('pageTitle' , 'list_satuan'));
    }

    public function store(Request $request)
    {
        $messages = [
            'required' => 'Silahkan isi terlebih dahulu',
            'numeric' => 'Silahkan isi menggunakan nominal angka'
        ];
        $validator = Validator::make($request->all(), [
            'kode_barang' => 'required|unique:barangs,kode_barang',
            'nama_barang' => 'required',
            'harga_barang' => 'required|numeric',
            'deskripsi_barang' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $list_barang = New Barang;
        $list_barang->kode_barang = $request->kode_barang;
        $list_barang->nama_barang = $request->nama_barang;
        $list_barang->harga_barang = $request->harga_barang;
        $list_barang->deskripsi_barang = $request->deskripsi_barang;
        $list_barang->satuan_id = $request->satuan;
        $list_barang->save();

        return redirect()->route('list_barang.index');
    }

    public function show(string $id)
    {
        $pageTitle = 'Detail Barang';

        $list_barang = Barang::find($id);

        return view('list_barang.show', compact('pageTitle', 'list_barang'));
    }

    public function edit(string $id)
    {
        $pageTitle = 'Edit Barang';

        $list_satuan = Satuan::all();
        $list_barang = Barang::find($id);


        return view('list_barang.edit', compact('pageTitle', 'list_barang', 'list_satuan', 'id'));
    }

    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => 'Silahkan isi terlebih dahulu',
            'numeric' => 'Silahkan isi menggunakan nominal angka'
        ];
        $validator = Validator::make($request->all(), [
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'harga_barang' => 'required|numeric',
            'deskripsi_barang' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $list_barang = Barang::find($id);
        $list_barang->kode_barang = $request->kode_barang;
        $list_barang->nama_barang = $request->nama_barang;
        $list_barang->harga_barang = $request->harga_barang;
        $list_barang->deskripsi_barang = $request->deskripsi_barang;
        $list_barang->satuan_id = $request->satuan;
        $list_barang->save();

        return redirect()->route('list_barang.index');
    }

    public function destroy(string $id)
    {
        Barang::find($id)->delete();

        return redirect()->route('list_barang.index');
    }
}
