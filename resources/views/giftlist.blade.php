@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-12">
            <h1>User Table</h1>
            <form action="{{route('process')}}" method="POST">
                    @csrf <!-- {{ csrf_field() }} -->

                    <div class="form-group">
                <table class="table">
                    <thead class="">
                        <th  scope="col">id</th>
                        <th  scope="col">Producto</th>
                        <th  scope="col">Description</th>
                        <th  scope="col">Image</th>
                        <th  scope="col">Precio</th>
                        <th  scope="col">Elegir</th>

                    </thead>
                    <tbody>
                        @foreach ($products as $producto)
                        <tr>
                            <td>{{$producto->id }}</td>
                            <td>{{$producto->name }}</td>
                            <td>{{$producto->description }}</td>
                            <td><img src="{{$producto->image }}" alt="{{$producto->name }}" class="img-thumbnail"></td>
                            <td>{{$producto->price }}</td>
                            <td><input type="checkbox" name="product[]" value="{{ $producto->id }}" class="btn btn-info"></td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <input type="submit" value="Process" class="btn btn-success btn-block">
            </div>
          
        </form>
            </div>
        </div>
    </div>
    @endsection
    