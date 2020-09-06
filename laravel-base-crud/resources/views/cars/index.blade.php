<h1> Car list</h1>


<div>

  <ul>
      @foreach ($cars as $car )
        <li>

        <strong>Manufacturer:</strong>  {{$car->manufacturer}}  <br> <strong>Model:</strong> {{ $car->Model}}
        <div>

          <a href="{{route('cars.show', $car)}}"> More info</a>
          <a href="{{route('cars.edit', $car)}}"> Edit Car info</a>
          <form action="{{route('cars.destroy', $car) }}" method="post"> {{-- controllo il metodo associato alla route da -> riga di comando route:list --}}

            @csrf {{-- token--}}
            @method("DELETE")

          <input type="submit" name="" value="Delete car">
          </form>
        </div>

        </li>

      @endforeach
  </ul>

</div>


<a href="{{route('cars.create')}}"> Add new car</a>
