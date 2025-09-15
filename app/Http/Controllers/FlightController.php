<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function some()
    {
        $flights = Flight::where('airline', 'Garuda Indonesia')->limit(2)->orderBy('name')->get();

        foreach ($flights as $flight) {
            echo $flight->name . "<br>";
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flights = Flight::all();

        foreach ($flights as $flight) {
            echo $flight->name . "<br>";
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
        // $flight = Flight::create([
        //     'name' => 'BWI to SBY',
        //     'airline' => 'Garuda Indonesia',
        //     'departure' => 'BWI',
        //     'destination' => 'SBY',
        //     'price' => 100000,
        //     'arrival_time' => '08:00:00',
        // ]);

        // if ($flight->save()) {
        //     return "Sukses1";
        // }

        $flight2 = new Flight();
        $flight2->name = "BWI to BALI";
        $flight2->airline = "Merpati Air";
        $flight2->departure = 'BWI';
        $flight2->destination = 'BALI';
        $flight2->price = 200000;
        $flight2->arrival_time = '12:01:00';
        if ($flight2->save()) {
            return "Sukses2";
        }
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
        $flight = Flight::find($id);

        $flight->name = "JKT to JBR";
        $flight->airline = "Garuda Indonesia";
        $flight->departure = "BWI";
        $flight->destination = "JBR";
        $flight->price = 100000;
        $flight->arrival_time = "01:00:00";


        if ($flight->save()) {
            return "Sukses Update";
        }

        // multiple data
        // Flight::where('active', 1)->where('destination', 'BWI')->update(['delayed' => 1]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $flight = Flight::find($id);
        if ($flight->delete()) {
            return "Sukses Hapus";
        }

        // multiple data
        // Flight::where('active', 0)->delete();
    }
}
