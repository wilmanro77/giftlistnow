@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn btn-info" href="{{route('main-tabla.create')}}">Añadir Producto</a>
        </div>
        <div class="col-md-12">
            <form action="{{route('user-products.store')}}" method="POST">
                    @csrf <!-- {{ csrf_field() }} -->

                    <div class="form-group">
                <table class="table">
                    <thead class="">
                        <td>id</td>
                        <td>Producto</td>
                        <td>precio</td>
                        <td>elegir</td>
                        
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                        <tr>
                            <td>{{$producto->id }}</td>
                            <td>{{$producto->nombre }}</td>
                            <td>{{$producto->precio }}</td>
                            <td><input type="checkbox" name="product-{{ $producto->id }}" class="btn btn-info"></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-secondary" value="Agregar">
            </div>
        </form>
            </div>
        </div>
    </div>
    @endsection
    