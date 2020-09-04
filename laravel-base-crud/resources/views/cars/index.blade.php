<h1> Pagina lista auto</h1>


<div>

  <ul>
      @foreach ($cars as $car )
        <li>

          {{$car->manufacturer}} - {{ $car->Model}}

        </li>

      @endforeach
  </ul>

</div>
