@extends('layouts.app')

@section('content')
  <h3>Tus productos son:</h3>
  @foreach ($productos as $producto)
    <div class="">
      <h4>{{$producto->nombre}}</h4>
      <p>$ {{$producto->precio}}</p>
      <p> <a href="/detalleProducto/{{$producto->id}}">Ver Mas</a> </p>
      <p> <a href="#">Agregar al Carrito</a> </p>
    </div>
  @endforeach
@endsection
