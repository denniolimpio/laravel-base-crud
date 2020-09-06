<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {

    $cars = Car::all();

    return view('cars.index', compact('cars'));


  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //ritorno la view

    return view('cars.create');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {

    //validation
    //controllo se i campi del form sono compilati correttamente

    $request->validate([

      'Model' => 'required|max:255',
      // 'Model_Year' => '|date_format:d/m/Y',
      'Model_Year' => 'integer|between:1905,2021',
      'transmission' => 'required|max:50',
      'fuel_type' =>'required|max:50',
      'Doors' => 'integer|between:2,4',
      // 'price' =>'required|numeric|',
      'description' => 'required|max:500',

    ]);
    //verifico se store riporta i dati inseriti del form
    // dd($request->all());

    $data = $request->all();

    // salvo i dati nel Database
    $car = new Car();

    $car->fill($data);
    $saved = $car->save();


    return redirect()-> route('cars.index');

  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show(Car $car)
  {
    return view('cars.show', compact('car'));

  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit(Car $car)
  {
    return view('cars.edit', compact('car'));
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, Car $car)
  {

    $request->validate([

      'Model' => 'required|max:255',
      // 'Model_Year' => '|date_format:d/m/Y',
      'Model_Year' => 'integer|between:1905,2021',
      'transmission' => 'required|max:50',
      'fuel_type' =>'required|max:50',
      'Doors' => 'integer|between:2,4',
      // 'price' =>'required|numeric|',
      'description' => 'required|max:500',

    ]);

    $data = $request->all();
    $car->update($data);


    return redirect() -> route('cars.index');



  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy(Car $car)
  {
    $car->delete();

    return redirect() -> route('cars.index');
  }
}
