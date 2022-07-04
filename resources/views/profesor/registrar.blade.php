@extends('layouts.app')
@section('content')
    <form action="{{Route('procesar.profesor')}}" method="post">
        @csrf
        <label for="descripcion">ingrese datso del profesor</label><br>
        <input type="text" name="nombres" id="nombres" placeholder="ingrese descripcion"><br>
        <input type="text" name="apellidos" id="apellidos" placeholder="ingrese apellidos"><br>
        <input type="text" name="direccion" id="direccion" placeholder="ingrese direcion"><br>
        <input type="text" name="clave" id="clave" placeholder="ingrese clave"><br>
        <input type="text" name="correo_institucional" id="correo_institucionaln" placeholder="ingrese correo_institucional"><br>
        <input type="submit" value="guardar">
    </form>
@endsection
