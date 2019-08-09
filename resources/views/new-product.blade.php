@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"></div>
        <div class="col-md-8">
                <form action="{{route('giftlist.store')}}" method="POST">
                        @csrf <!-- {{ csrf_field() }} -->
                    <label for="nombre">Nombre: </label>
                    <input type="text" class="form-control" name="nombre" id="nombre">
                    <label for="precio">Precio:</label>
                    <input type="text" class="form-control" name="precio" id="precio">
                    <input type="submit" value="Guardar" class="btn btn-primary my-2">
                </form>
        </div>
    </div>
</div>
@endsection
