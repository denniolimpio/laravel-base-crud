<h1> More information page</h1>

<div>

  <h3> Manufacturer: {{ $car->manufacturer }} <br> Model: {{ $car->Model}}</h3>


  <ul>

    <li>
      Year: {{ $car->Model_Year }}
    </li>

    <li>
      Transmission: {{ $car->transmission }}

    </li>
    Description: {{ $car->description}}

    <li>
      fuel type: {{ $car->fuel_type}} -

    </li>

    <li>
      Door Number: {{ $car->Doors}}

    </li>

  </ul>


  <div>

    <a href="{{route('cars.index', $car)}}"> Back</a>

  </div>


</div>
