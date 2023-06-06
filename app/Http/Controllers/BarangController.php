<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Barang;
use App\Models\Satuan;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Data Barang';

        // Eloquent
        $barangs = Barang::all();

        return view('barang.index', [
            'pageTitle' => $pageTitle,
            'barangs' => $barangs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Tambah Barang';

        $satuans = Satuan::all();

        return view('barang.create', compact('pageTitle', 'satuans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'unique' => ':attribute sudah digunakan',
            'numeric' => 'Isi :attribute dengan angka'
        ];

        $validator = Validator::make($request->all(), [
            'kode_barang' => 'required|unique:barangs,kode_barang',
            'namaBarang' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Eloquent
        $barang = New Barang;
        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->namaBarang;
        $barang->harga_barang = $request->harga;
        $barang->deskripsi_barang = $request->deskripsi;
        $barang->satuan_id = $request->satuan;
        $barang->save();

        return redirect()->route('barangs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Detail Barang';

        // Eloquent
        $barang = Barang::find($id);

        return view('barang.show', compact('pageTitle', 'barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit Barang';

        // Eloquent
        $satuans = Satuan::all();
        $barang = Barang::find($id);

        return view('barang.edit', compact('pageTitle', 'satuans', 'barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'unique' => 'Isi :attribute sudah digunakan',
            'numeric' => 'Isi :attribute dengan angka'
        ];

        // $validator = Validator::make($request->all(), [
        //     'kode_barang' => 'required|unique:barangs,kode_barang' .$id,
        //     'namaBarang' => 'required',
        //     'harga' => 'required|numeric',
        //     'deskripsi' => 'required',
        // ], $messages);
        $validator = Validator::make($request->all(), [
            'kode_barang' => 'required|unique:barangs,kode_barang,'.$id,
            'namaBarang' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
        ], $messages);



        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Eloquent
        $barang = Barang::find($id);
        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->namaBarang;
        $barang->harga_barang = $request->harga;
        $barang->deskripsi_barang = $request->deskripsi;
        $barang->satuan_id = $request->satuan;
        $barang->save();

        return redirect()->route('barangs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Eloquent
        Barang::find($id)->delete();

        return redirect()->route('barangs.index');
    }
}
