<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\StokLog;

class ProdukController extends Controller
{
       public function index()
    {
        $produks = Produk::all();
        return view('admin.produk.index', compact('produks'));
    }

    public function create()
    {
        $kategoris = Kategori::all();
        return view('admin.produk.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kategori_id'   => 'required|exists:kategoris,id',
            'kode_barcode'  => 'required|string|unique:produks,kode_barcode',
            'nama_produk'   => 'required|string|max:255',
            'harga_beli'    => 'required|numeric|min:0',
            'harga_jual'    => 'required|numeric|min:0',
            'stok'          => 'nullable|integer|min:0',
            'satuan'        => 'required|string|max:50',
            'deskripsi'     => 'nullable|string',
            'gambar'        => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status'        => 'nullable|in:0,1',
        ]);

        $produk = Produk::create($validated);

        StokLog::create([
        'produk_id'  => $produk->id,
        'tanggal'    => now(),
        'tipe'       => 'masuk',           
        'jumlah'     => $request->stok,
        'sumber'     => 'Stok awal',
        'keterangan' => 'Input stok pertama kali',
        'user_id'    => auth()->id(),
        ]);

        return redirect()->route('produk.index')->with('success', 'Produk Berhasil ditambahkan');

    }

    public function destroy($id)
    {
        $produk = Produk::destroy($id);

        return redirect()->route('produk.index')->with('success', 'Data Produk berhasil dihapus');
    }
}
