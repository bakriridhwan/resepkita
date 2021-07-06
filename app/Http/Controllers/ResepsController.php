<?php

namespace App\Http\Controllers;

use App\Kategori;
use App\Resep;
use App\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ResepsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reseps = Resep::all();
        $kategoris = Kategori::all();
        return view('reseps.index', compact('reseps'), compact('kategoris'));
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
        return view('reseps.create', compact('kategoris'));
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
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required|mimes:jpeg,png,jpg|max:2048',
            'kategori_id' => 'required',
            'bahan' => 'required',
            'alat' => 'required',
            'langkah' => 'required',
        ], [
            'kategori_id.required' => 'Kategori tidak boleh kosong'
        ]);

        // $file = $request->file('gambar');
        // $nama_file = $file->getClientOriginalName();
        // $tujuan_upload = 'data_gambar';
        // $file->move($tujuan_upload, $nama_file);

        $imgName = $request->gambar->getClientOriginalName() . '-' . time() . '.' . $request->gambar->extension();

        $request->gambar->move(public_path('gambar_resep'), $imgName);




        $resep = new Resep;
        $resep->judul = $request->judul;
        $resep->gambar = $imgName;
        $resep->kategori_id = $request->kategori_id;
        $resep->bahan = $request->bahan;
        $resep->alat = $request->alat;
        $resep->langkah = $request->langkah;
        $resep->keterangan = 'evaluasi';
        $resep->arsip = 'tidak';

        $resep->user_id = Auth::user()->id;

        $resep->save();

        return redirect('/reseps')
            ->with('status', 'Resep berhasil ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Resep  $resep
     * @return \Illuminate\Http\Response
     */
    public function show(Resep $resep)
    {
        //
        return view('reseps.detail', compact('resep'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resep  $resep
     * @return \Illuminate\Http\Response
     */
    public function edit(Resep $resep)
    {
        //
        return view('reseps.edit', compact('resep'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resep  $resep
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resep $resep)
    {
        //
        $request->validate([
            'judul' => 'required',
            // 'gambar' => 'required',
            'bahan' => 'required',
            'alat' => 'required',
            'langkah' => 'required',
        ]);


        $imgName = null;

        if ($request->gambar) {
            $imgName = $request->gambar->getClientOriginalName() . '-' . time() . '.' . $request->gambar->extension();

            $request->gambar->move(public_path('gambar_resep'), $imgName);
        }




        Resep::where('id', $resep->id)
            ->update([
                'judul' => $request->judul,
                'gambar' => $imgName,
                'bahan' => $request->bahan,
                'alat' => $request->alat,
                'langkah' => $request->langkah,
                'keterangan' => 'evaluasi',
            ]);


        // Resep::where('id', $resep->id)->update([
        //     'judul' => $request->judul,
        //     'gambar' => $request->gambar,
        //     'bahan' => $request->bahan,
        //     'alat' => $request->alat,
        //     'langkah' => $request->langkah,
        //     'keterangan' => 'evaluasi',
        // ]);

        // if ($reseps->keterangan == 'ditolak') {
        //     Resep::where('id', $resep->id)->update([
        //         'judul' => $request->judul,
        //         'gambar' => $request->gambar,
        //         'bahan' => $request->bahan,
        //         'alat' => $request->alat,
        //         'langkah' => $request->langkah,
        //         'keterangan' => 'evaluasi',
        //     ]);
        // } elseif ($reseps->keterangan == 'diterima') {
        //     Resep::where('id', $resep->id)->update([
        //         'judul' => $request->judul,
        //         'gambar' => $request->gambar,
        //         'bahan' => $request->bahan,
        //         'alat' => $request->alat,
        //         'langkah' => $request->langkah,
        //         'keterangan' => 'evaluasi',
        //     ]);
        // } else {
        //     // Resep::where('id', $resep->id)->update([
        //     //     'judul' => $request->judul,
        //     //     'gambar' => $request->gambar,
        //     //     'bahan' => $request->bahan,
        //     //     'alat' => $request->alat,
        //     //     'langkah' => $request->langkah,
        //     //     // 'keterangan' => 'evaluasi',
        //     // ]);
        //     $resep->update($request->all());
        // }


        return redirect('/reseps')
            ->with('status', 'Resep berhasil diperbarui !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resep  $resep
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resep $resep)
    {
        //
        Resep::destroy($resep->id);

        return redirect('/reseps')
            ->with('status', 'Resep dihapus! ');
    }

    // BUAT SENDIRI
    public function usr()
    {
        return view('user.index');
    }

    public function card()
    {
        $reseps = Resep::all();
        return view('reseps.card', ['reseps' => $reseps]);
    }

    public function card2()
    {
        $reseps = Resep::all();
        return view('reseps.card2', ['reseps' => $reseps]);
    }

    public function cardDetail(Resep $resep)
    {
        return view('reseps.cardDetail', compact('resep'));
    }

    // ADMIN
    public function resepsAdmin()
    {
        $reseps = Resep::all();
        return view('admin.reseps', compact('reseps'));
    }

    public function terima(Resep $resep)
    {
        Resep::where('id', $resep->id)->update([
            'keterangan' => 'diterima',
            'arsip' => 'diarsip',

        ]);

        return redirect('/reseps/admin')->with('status', 'Resep diterima!, data diarsip!');
    }

    public function tolak(Resep $resep)
    {
        Resep::where('id', $resep->id)->update([
            'keterangan' => 'ditolak',
            'arsip' => 'diarsip',
        ]);

        return redirect('/reseps/admin')->with('tolak', 'Resep ditolak!, data diarsip!');
    }

    // public function revisi(Resep $resep)
    // {
    //     Resep::where('id', $resep->id)->update([
    //         'keterangan' => 'revisi'
    //     ]);

    //     return redirect('/reseps/admin')->with('revisi', 'Resep direvisi!');
    // }

    public function adminDetail(Resep $resep)
    {
        return view('admin.detail', compact('resep'));
    }

    public function adminDestroy(Resep $resep)
    {
        //
        Resep::destroy($resep->id);

        return redirect('/reseps/admin')
            ->with('delete', 'Resep dihapus!');
    }

    //todo welcome WELCOME=========================================================

    public function welcomeResep(Resep $resep)
    {
        //

        return view('welcomeResep', compact('resep'));
    }


    public function welcomeKategori(Resep $resep)
    {
        //
        $kategori = Kategori::all();
        return view('welcomeKategori', compact('resep'), compact('kategori'));
    }

    // welcome kategori
    // public function resepKategori(Resep $resep)
    // {
    //     //
    //     $resep = Resep::where('kategori_id', $resep->kategori_id)->get();
    //     $reseps = Resep::all();

    //     if ($reseps->kategori_id == 2) {
    //         return view('resepMinuman', compact('reseps'));
    //     }
    // }


    public function welcomeProfile(Resep $resep)
    {
        //
        return view('welcomeProfile', compact('resep'));
    }


    public function welcomeAbout(Resep $resep)
    {
        //
        return view('welcomeAbout', compact('resep'));
    }


    //! ARSIP USER / PUNYA USER
    public function arsipUserData(Resep $resep)
    {
        $reseps = Resep::all();
        return view('reseps.arsip', compact('reseps'));
    }



    // Arsip
    // public function adminArsip(Resep $resep)
    // {
    //     Resep::where('id', $resep->id)->update([
    //         'arsip' => 'diarsip'
    //     ]);

    //     return redirect('/reseps/admin')->with('arsip', 'Resep diarsip!, silakan ke menu arsip.');
    // }

    public function arsip()
    {
        $reseps = Resep::all();

        return view('admin.arsip', compact('reseps'));
    }

    // public function arsipDestroy(Resep $resep)
    // {
    //     //
    //     Resep::destroy($resep->id);

    //     return redirect('/arsip')
    //         ->with('status', 'Data resep dihapus!');
    // }

    public function unarsip(Resep $resep)
    {
        Resep::where('id', $resep->id)->update([
            'arsip' => 'tidak',
            'keterangan' => 'evaluasi',
        ]);

        return redirect('/arsip')->with('unarsip', 'Resep di-restore!, silakan ke menu request.');
    }


    // kategori
    // public function kategori()
    // {
    //     // $reseps = Resep::all();
    //     $kategoris = Kategori::all();
    //     return view('admin.kategori', compact('kategoris'));
    // }


    // cariData
    public function search(Request $request)
    {
        $keyword = $request->search;
        $users = User::where('name', 'like', "%" . $keyword . "%")->paginate(5);
        return view('admin.users', compact('users'))->with('i', (request()->input('page', 1) - 1) * 5);
    }


    // API ==============================================================
    // =================================================================
    //
    // GET
    public function getApiReseps()
    {
        $reseps = DB::table('reseps')->get();

        if ($reseps) {
            return response([
                'success' => true,
                'message' => 'Semua data resep',
                'data' => $reseps,
            ], 200);
        } else {
            return response([
                'success' => false,
                'message' => 'Data tidak ditemukan!'
            ], 401);
        }
    }

    // DETAIL
    public function detailApiReseps($id)
    {
        $reseps = DB::table('reseps')->where('id', $id)->first();

        if ($reseps) {
            return response([
                'success' => true,
                'message' => 'Detail data resep',
                'data' => $reseps
            ], 200);
        } else {
            return response([
                'success' => false,
                'message' => 'Tidak ditemukan data resep',
            ], 401);
        }
    }

    // POST
    public function storeApiReseps(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'judul' => 'required',
            // 'idKat' => 'required',
            // 'judul' => 'required',
            // 'pengarang' => 'required',
            // 'penerbit' => 'required',
            // 'tahun_terbit' => 'required',
            // 'sampul' => 'required',
            // 'sinopsis' => 'required',
        ], [
            'judul.required' => 'Judul tidak boleh kosong'
        ]);

        if ($validasi->fails()) {
            return response()->json($validasi->errors());
        } else {
            // melakukan insert data

            $reseps = DB::table('reseps')->insert([
                'judul' => $request->judul,

                // 'idKat' => $request->idKat,
                // 'judul' => $request->judul,
                // 'pengarang' => $request->pengarang,
                // 'penerbit' => $request->penerbit,
                // 'tahun_terbit' => $request->tahun_terbit,
                // 'sampul' => $request->sampul,
                // 'sinopsis' => $request->sinopsis,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            if ($reseps) {
                return response([
                    'success' => true,
                    'message' => 'Data resep berhasil disimpan',
                ], 200);
            } else {
                return response([
                    'success' => false,
                    'message' => 'Data resep gagal disimpan',
                ], 401);
            }
        }
    }


    // PUT
    public function updateApiReseps(Request $request, $id)
    {
        $validasi = Validator::make($request->all(), [
            'judul' => 'required',
            // 'idKat' => 'required',
            // 'judul' => 'required',
            // 'pengarang' => 'required',
            // 'penerbit' => 'required',
            // 'tahun_terbit' => 'required',
            // 'sampul' => 'required',
            // 'sinopsis' => 'required',
        ], [
            'judul.required' => 'Judul tidak boleh kosong'
        ]);

        if ($validasi->fails()) {
            return response()->json($validasi->errors());
        } else {
            // melakukan insert data

            $reseps = DB::table('reseps')->where('id', $id)->update([
                'judul' => $request->judul,
                // 'idKat' => $request->idKat,
                // 'judul' => $request->judul,
                // 'pengarang' => $request->pengarang,
                // 'penerbit' => $request->penerbit,
                // 'tahun_terbit' => $request->tahun_terbit,
                // 'sampul' => $request->sampul,
                // 'sinopsis' => $request->sinopsis,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            if ($reseps) {
                return response([
                    'success' => true,
                    'message' => 'Data resep berhasil diubah!',
                ], 200);
            } else {
                return response([
                    'success' => false,
                    'message' => 'Data resep gagal diubah!',
                ], 401);
            }
        }
    }



    // DELETE
    public function destroyApiReseps($id)
    {
        $reseps = DB::table('reseps')->where('id', $id)->delete();

        if ($reseps) {
            return response([
                'success' => true,
                'message' => 'Data resep berhasil dihapus!',
            ], 200);
        } else {
            return response([
                'success' => false,
                'message' => 'Data resep gagal dihapus!',
            ], 401);
        }
    }
}
