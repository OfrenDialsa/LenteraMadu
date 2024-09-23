<?php

namespace App\Http\Controllers;

use App\Models\dokumen;
use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;

class dokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dokumen = dokumen::all();
        return view ('dokumen.index')->with('dokumen', $dokumen);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dokumen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nm = $request->file;
        $namafile = $nm->getClientOriginalName();

            $dtupload = new dokumen();
            $dtupload->nama = $request->nama;
            $dtupload->file = $namafile;

        $nm->move(public_path().'/pdf',$namafile);
        $dtupload->save();

        return redirect('dokumen')->with('flash_message', 'dokumen telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        dokumen::destroy($id);
        return redirect('dokumen')->with('flash_message', 'Dokumen telah dihapus!'); 
    }
}
