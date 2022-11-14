
@extends('layouts.pdfinicio')
@section('content')
<h3>Listado de descuentos</h3>
    <div class="card-body">    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Clave catastral</th>
      <th scope="col">Correo</th>
      <th scope="col">Tipo de tramite</th>
      <th scope="col">Comprobante</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($discount as $discount)
    <tr>
      <td>{{$discount->clave_catastral}}</td>
      <td>{{$discount->correo}}</td>
      <td>{{$discount->tipo_tramite}}</td>
      <td><img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;"
        class="card-img-top rounded-circle mx-auto d-block" src="images/{{$discount->archivo_comprobante}}"></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection