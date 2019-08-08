@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-12">
            <h1>User Table</h1>
            <form action="{{route('user-products.store')}}" method="POST">
                    @csrf <!-- {{ csrf_field() }} -->

                    <div class="form-group">
                <table class="table">
                    <thead class="">
                        <th  scope="col">id</th>
                        <th  scope="col">Producto</th>
                        <th  scope="col">precio</th>
                        
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                        <tr>
                            <td>{{$producto->id }}</td>
                            <td>{{$producto->nombre }}</td>
                            <td>{{$producto->precio }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
          
        </form>
            </div>
        </div>
    </div>
    @endsection
    