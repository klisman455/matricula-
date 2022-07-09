@extends('layouts.app')
@section('content')
    <form action="{{Route('procesar.malla')}}" method="post">
        @csrf
        <label for="descripcion">ingrese datos de malla</label><br>
        <input type="text" name="descripcion" id="descripcion" placeholder="ingrese descripcion"><br>
        <input type="submit" value="guardar">
    </form>
@endsection
