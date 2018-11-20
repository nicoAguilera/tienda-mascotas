<?php

namespace App\Http\Controllers;

// Model
use App\Pet;

// Request
use Illuminate\Http\Request;
use App\Http\Requests\StorePetValidation;

// Date
use Carbon\Carbon;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pets = Pet::all();
        
        return view('pets.index', ['pets' => $pets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $today = Carbon::now()->toDateString();
        
        return view('pets.create', ['today' => $today]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePetValidation  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePetValidation $request)
    {
        $pet = Pet::create($request->except('_token'));
        return redirect('/');
        //return Redirect::route('pets.index');
                //->with('alert.success', Lang::get('courses.create_success_alert'));*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function show(Pet $pet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function edit(Pet $pet)
    {
        return view('pets.edit', ['pet' => $pet]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StorePetValidation  $request
     * @param  \App\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function update(StorePetValidation $request, Pet $pet)
    {
        var_dump($pet->species_id);
        echo "<br>";
        var_dump($request->species_id);
        /*$result = $pet->update($request->only('name', 'gender', 'birthdate', 'death_date', 'observation'));
        
        if($result === true){
            return Redirect::route('pets.show', $pet->id)->with('alert.success', "Ficha actualizada correctamente.");
        }else{
            return Redirect::route('pets.edit', $pet->id)->with('alert.danger', "¡Corregir los campos con valores incorrectos!");
        }*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pet $pet)
    {
        //
    }
}
