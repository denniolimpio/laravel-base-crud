<h1> [form] Add new Car</h1>


{{-- Validation error --}}

@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

{{-- Aggiungo il form  --}}

{{-- qui collego la route in cui verranno salvati i nuovi dati --}}

<form action="{{route('cars.store')}}" method="post"> {{-- controllo il metodo associato alla route da -> riga di comando route:list --}}

  @csrf {{-- token--}}

  {{-- scriviamo a mano l'input --}}
  <input name="_method" type="hidden" value="POST">
  {{-- oppure usiamo blade --}}
  @method('POST')

  <div>

    <div>
      <label> Manufacturer: </label>
      <input type="text" name="manufacturer" value="{{old('manufacturer')}}" placeholder="Audi,Bmw,Fiat">
    </div>


  </div>

  <div>

    <div>

      <label> Model</label>

    </div>
    <input type="text" name="Model" value="{{old('Model')}}" placeholder="A1">
  </div>


  <div>
    <div>
      <label> Model Year</label>
    </div>

    <input type="date('')" name="Model_Year" value="{{old('Model_Year')}}" placeholder="2020">
  </div>

  <div>
    <div>
      <label> transmission</label>
      <input type="text" name="transmission" value="{{old('transmission')}}" placeholder="transmission">

    </div>
  </div>
  <div>
    <div>
      <label> Fuel Type</label>
      <input type="text" name="fuel_type" value="{{old('fuel_type')}}" placeholder="Fuel">

    </div>
  </div>

  <div>
    <div>
      <label> Doors</label>
      <input type="number" name="Doors" value="{{old('Doors')}}" placeholder="doors">

    </div>
  </div>

  <div>
    <div>
      <label> Price</label>
      <input type="number" name="price" value={{old('price')}} placeholder="10000.00">

    </div>
  </div>

  <div>

    <div>
      <label> Description</label>
    </div>
    <textarea name="description" rows="8" cols="80" value={{old('description')}}></textarea>
  </div>


  <div>

    <input type="submit" name=" Save" value="Save">

  </div>
