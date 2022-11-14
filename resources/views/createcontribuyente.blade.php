@extends("layouts.app")
@section('title', 'Contribuyente')
@section('content')
<div class="container " >
{!!Form::open(['route'=>'contribuyentes.store','method'=>'POST','files'=>'true']) !!}
<h1 class="col text-left"></h1>
<h2 class="col text-center">Contribuyentes</h2>
<h5 class="col text-left"></h5>
<h5 class="col text-left">Ingresa los siguientes datos</h5>
@include('form')
<div class="row justify-content-center">
  
{{Form::submit('Buscar',['class'=>'btn btn-outline-dark'])}}
</div>
{!!Form::close()!!}
@endsection
</div>





