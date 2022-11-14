
@extends('layouts.pdfinicio')
@section('content')


<div class="card-body">
  @foreach ($pay_bills as $pay_bills)
<table class="table">
  <thead>
  
    <tr>
      <th scope="col">#</th>
      <th scope="col">Clave catastral</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Correo</th>
      <th scope="col">Comprobante</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$pay_bills->id}}</th>
      <td>{{$pay_bills->clave_catastral}}</td>
      <td>{{$pay_bills->telefono}}</td>
      <td>{{$pay_bills->correo}}</td>
      <td><img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;"
        class="card-img-top rounded-circle mx-auto d-block" src="images/{{$pay_bills->comprobante_pago_cliente}}"></td>
    </tr>
  </tbody>
</table>
@endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
