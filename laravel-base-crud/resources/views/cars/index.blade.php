<h1> Pagina lista auto</h1>


<div>

  <ul>
      @foreach ($cars as $car )
        <li>

        <strong>Manufacturer:</strong>  {{$car->manufacturer}} - <br> <strong>Strong:</strong> {{ $car->Model}}
        <div>

          <a href="{{route('cars.show', $car)}}"> More info</a>

        </div>

        </li>

      @endforeach
  </ul>

</div>
