
@extends('layouts.pdfinicio')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Comprobantes de descuentos') }}</div>

                <div class="card-body">
 @foreach ($discount as $discount)
                    <table class="table">
  <thead>
  
    <tr>
      <th scope="col">#</th>
      <th scope="col">Clave catastral</th>
      <th scope="col">Correo</th>
      <th scope="col">Tipo de tramite</th>
      <th scope="col">Comprobante</th>

      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$discount->id}}</th>
      <td>{{$discount->clave_catastral}}</td>
      <td>{{$discount->correo}}</td>
      <td>{{$discount->tipo_tramite}}</td>
      <td><img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;"
        class="card-img-top rounded-circle mx-auto d-block" src="images/{{$discount->archivo_comprobante}}"></td>

      
    </tr>
    <tr>
    </tr>
  </tbody>
  
</table>
@endforeach
                </div>
               
            </div>
            
        </div>
        
    </div>
    
@endsection
