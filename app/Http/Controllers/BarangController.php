<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = barang::latest()->paginate(10);
        return view('crud.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image'     => 'required|image|mimes:png,jpg,jpeg',
            'nama'     => 'required',
            'description'   => 'required',
            'harga'   => 'required'
        ]);
    
        //upload image
        $image = $request->file('image');
        $image->storeAs('public/gambar', $image->hashName());
    
        $barang = barang::create([
            'image'     => $image->hashName(),
            'nama'     => $request->nama,
            'description'     => $request->description,
            'harga'   => $request->harga
        ]);
    
        if($barang){
            //redirect dengan pesan sukses
            return redirect()->route('barangs.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('barangs.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(barang $barang)
    {
        return view('crud.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, barang $barang)
    {
        $this->validate($request, [
            'nama'            => 'required',
            'description'     => 'required',
            'harga'           => 'required'
        ]);
    
        //get data Blog by ID
        $barang = barang::findOrFail($barang->id);
    
        if($request->file('image') == "") {
    
            $barang->update([
                'nama'     => $request->nama,
                'description'     => $request->description,
                'harga'   => $request->harga
            ]);
    
        } else {
    
            //hapus old image
            Storage::disk('local')->delete('public/gambar/'.$barang->image);
    
            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/barang', $image->hashName());
    
            $barang->update([
                'image'     => $image->hashName(),
                'nama'     => $request->nama,
                'description'     => $request->description,
                'harga'   => $request->harga
            ]);
    
        }
    
        if($barang){
            //redirect dengan pesan sukses
            return redirect()->route('barangs.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('barangs.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = barang::findOrFail($id);
        Storage::disk('local')->delete('public/gambar/'.$barang->image);
        $barang->delete();

        if($barang){
            //redirect dengan pesan sukses
            return redirect()->route('barangs.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('barangs.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
