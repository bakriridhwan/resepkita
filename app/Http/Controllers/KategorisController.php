<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use App\Kategori;
use PhpOption\None;

class KategorisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kategoris = Kategori::all();
        return view('kategori.index', compact('kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kategoris = Kategori::all();
        return view('kategori.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //
        $request->validate([
            'nama_kategori' => 'required',
            'gambar_kategori' => 'required|mimes:jpeg,png,jpg|max:2048',
            'deskripsi_kategori' => 'required',
        ]);

        // $file = $request->file('gambar_kategori');
        // $nama_file = $file->getClientOriginalName();
        // $tujuan_upload = 'data_gambar_kategori';
        // $file->move($tujuan_upload, $nama_file);


        $imgName = $request->gambar_kategori->getClientOriginalName() . '-' . time() . '.' . $request->gambar_kategori->extension();

        $request->gambar_kategori->move(public_path('gambar_kategori'), $imgName);




        $kategoris = new Kategori();
        $kategoris->nama_kategori = $request->nama_kategori;
        $kategoris->gambar_kategori = $imgName;
        $kategoris->deskripsi_kategori = $request->deskripsi_kategori;

        $kategoris->save();

        return redirect('/kategori')
            ->with('status', 'Kategori berhasil ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
        return view('kategori.detail', compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori)
    {
        //
        return view('kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori $kategori)
    {
        //
        $request->validate([
            'nama_kategori' => 'required',
            // 'gambar_kategori' => 'required|mimes:jpeg,png,jpg|max:2048',
            'deskripsi_kategori' => 'required',
        ]);

        // $kategori->update($request->all());

        $imgName = null;

        if ($request->gambar_kategori) {
            $imgName = $request->gambar_kategori->getClientOriginalName() . '-' . time() . '.' . $request->gambar_kategori->extension();

            $request->gambar_kategori->move(public_path('gambar_kategori'), $imgName);
        }


        // $file = $request->file('gambar_kategori');
        // $nama_file = $file->getClientOriginalName();
        // $tujuan_upload = 'data_gambar_kategori';
        // $file->move($tujuan_upload, $nama_file);

        Kategori::where('id', $kategori->id)
            ->update([
                'nama_kategori' => $request->nama_kategori,
                'gambar_kategori' => $imgName,
                'deskripsi_kategori' => $request->deskripsi_kategori,
            ]);

        return redirect('/kategori')
            ->with('status', 'Data kategori berhasil diperbarui !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori)
    {
        //
        $kategori->delete(); //Fungsi untuk menghapus data sesuai dengan ID yang dipilih

        return redirect('/kategori')
            ->with('status', 'Data kategori berhasil dihapus!'); //Redirect ke halaman books/index.blade.php dengan pesan success
    }
}
