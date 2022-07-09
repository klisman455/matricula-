@extends('layouts.app')
@section('content')
    <form action="{{Route('procesar.carrera')}}" method="post">
        @csrf
        <label for="descripcion">ingrese datos de malla</label><br>
        <input type="text" name="estado_curso" id="estado_curso" placeholder="ingrese "><br>
        <input type="text" name="estado" id="estado" placeholder="estado"><br>

        <input type="submit" value="guardar"><br>
    </form>

@endsection
