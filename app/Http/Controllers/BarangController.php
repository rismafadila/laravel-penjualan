<?php

namespace App\Http\Controllers;
use App\Models\Suplier;
use App\Models\Barang;
use DB;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $barang = Barang::with('suplier')->get();;
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Suplier = Suplier::all();
        return view('barang.create', compact('Suplier'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:barangs',
            'harga' => 'required',
            'stok' => 'required',
            'id_suplier' => 'required',
            'cover' => 'required|image|max:2048',
        ]);

        $barang = new Barang;
        $barang->nama = $request->nama;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
        // upload image / foto
        if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/barang/', $name);
            $barang->cover = $name;
        }
        $barang->id_suplier = $request->id_suplier;
        $barang->save();
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        $suplier = Suplier::all();
        return view('barang.edit', compact('barang', 'suplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'id_suplier' => 'required',
        ]);

        $barang = Barang::findOrFail($id);
        $barang->nama = $request->nama;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;

        if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/barang/', $name);
            $barang->cover = $name;
        }
        $barang->id_suplier = $request->id_suplier;
        $barang->save();
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->deleteImage();
        $barang->delete();
        return redirect()->route('barang.index');
    }
}
