<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CarController;

class Car extends Model
{
  protected $fillable [

    'manufacturer',
    'Model_Year',
    'description',
    'Model',
    'transmission',
    'fuel_type',
    'Doors',
    'Price'

  ];



}
