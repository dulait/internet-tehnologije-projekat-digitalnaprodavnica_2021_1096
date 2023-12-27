<?php

namespace App\Http\Controllers;

use App\Models\Korisnik;
use App\Http\Requests\StoreKorisnikRequest;
use App\Http\Requests\UpdateKorisnikRequest;

class KorisnikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $korisnici = Korisnik::paginate();

        if (!$korisnici) {
            return response()->json(['poruka' => 'Ne postoje korisnici u sistemu'], 404);
        }

        return response()->json($korisnici, 200);
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
    public function store(StoreKorisnikRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($korisnikId)
    {
        $korisnik = Korisnik::findOrFail($korisnikId);

        if (!$korisnik) {
            return response()->json(['poruka' => 'Ne postoji korisnik sa id: ' . $korisnikId], 404);
        }

        return response()->json($korisnik, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Korisnik $korisnik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKorisnikRequest $request, Korisnik $korisnik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Korisnik $korisnik)
    {
        //
    }
}
