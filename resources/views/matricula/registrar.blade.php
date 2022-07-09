@extends('layouts.app')
@section('content')
    <form action="{{Route('procesar.matricula')}}" method="post">
        @csrf
        <div class="mb-3">

            <label for="" class="form-label" color="red">Matricula</label>

            <input type="text" name="fecha" id="fecha"  placeholder="ingrese algo" class="form-control">
            <input type="text" name="id_curso" id="id_curso" placeholder="ingrese curso" class="form-control">
            <input type="text" name="id_user" id="id_user"  placeholder="usuario " class="form-control">           <! id usuario interno–-->

            <input type="submit" value="guardar" class="btn btn-primary">
        </div>


    </form>
    <br>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
