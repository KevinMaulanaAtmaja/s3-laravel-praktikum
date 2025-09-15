<?php

namespace App\Http\Controllers;

use App\Models\BibliografiKategori;
use Illuminate\Http\Request;

class BibliografiKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $biblikats = BibliografiKategori::all();
        // print($biblikats);
        foreach ($biblikats as $biblikat) {
            echo $biblikat->deskripsi . "<br>";
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $biblikat = BibliografiKategori::create([
            'deskripsi' => 'Fiksi2',
        ]);
        // $biblikat = new BibliografiKategori();
        // $biblikat->deskripsi = 'fiksi';

        if ($biblikat->save()) {
            return "sukses";
        }
        // if ($biblikat) {
        //     return "sukses";
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(BibliografiKategori $bibliografiKategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BibliografiKategori $bibliografiKategori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BibliografiKategori $bibliografiKategori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BibliografiKategori $bibliografiKategori)
    {
        //
    }
}
