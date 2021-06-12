<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $search = $request->cari;
            $dataBuku = DB::table('rak_buku')
                ->join('buku', 'id_buku', '=', 'buku.id')
                ->join('jenis_buku', 'id_jenis_buku', '=', 'jenis_buku.id')
                ->where('judul', 'like', '%' . $search . '%')
                ->get();
        } else {
            $dataBuku = DB::table('rak_buku')
                ->join('buku', 'id_buku', '=', 'buku.id')
                ->join('jenis_buku', 'id_jenis_buku', '=', 'jenis_buku.id')
                ->get();
        }

        $dataidBuku = DB::table('buku')->get();
        $dataidJenisBuku = DB::table('jenis_buku')->get();

        // print("<pre>" . print_r($dataidBuku, true) . "</​pre>");
        return view('buku0200', ['dataBuku' => $dataBuku, 'dataidBuku' => $dataidBuku, 'dataidJenisBuku' => $dataidJenisBuku]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('buku0200');
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
        Buku::create([
            'judul' => $request->judul,
            'tahun_terbit' => $request->tahun_terbit,
        ]);

        return redirect('buku');
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
    public function edit($id)
    {
        $buku = Buku::find($id);
        return view('editbuku0200', ['buku' => $buku]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $buku = Buku::find($id);
        $buku->judul = $request->judul;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->save();

        return redirect('buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete("DELETE rak_buku, jenis_buku, buku from rak_buku
        INNER JOIN jenis_buku ON rak_buku.id_jenis_buku = jenis_buku.id
        INNER JOIN buku ON rak_buku.id_buku = buku.id
        WHERE rak_buku.id = '$id'");

        return redirect('buku');
    }
}
