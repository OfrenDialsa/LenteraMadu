<?php

namespace App\Http\Controllers;

use App\Models\dokumen;
use App\Models\Krisan;
use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;

class AdminKriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $krisan = Krisan::all();
        return view ('adminKrisan.index')->with('krisan', $krisan);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminKrisan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Krisan::create($input);
        return redirect('adminKrisan')->with('flash_message', 'Kritik dan saran telah ditambahkan!');
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
        $krisan = Krisan::find($id);
        return view('adminKrisan.edit')->with('krisan', $krisan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $krisan = Krisan::find($id);
        $input = $request->all();
        $krisan->update($input);
        return redirect('adminKrisan')->with('flash_message', 'Telah ditanggapi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Krisan::destroy($id);
        return redirect('adminKrisan')->with('flash_message', 'Kritik dan saran telah dihapus!'); 
    }
}
