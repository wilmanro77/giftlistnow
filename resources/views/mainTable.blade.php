@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn btn-info stretched-link my-2" href="{{route('main-table.create')}}">Añadir Producto</a>
        </div>
        <div class="col-md-12">
                <h1>Main Table</h1>

            <form action="{{route('user-products.store')}}" method="POST">
                    @csrf <!-- {{ csrf_field() }} -->

                    <div class="form-group">
                <table class="table">
                    <thead class="">
                        <th  scope="col">id</th>
                        <th  scope="col">Producto</th>
                        <th  scope="col">precio</th>
                        <th  scope="col">elegir</th>
                        
                    </thead>
                    <tbody>
                        @foreach ($products as $producto)
                        <tr>
                            <td>{{$producto->id }}</td>
                            <td>{{$producto->name }}</td>
                            <td>{{$producto->price }}</td>
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
    