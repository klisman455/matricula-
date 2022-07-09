@extends('layouts.app')
@section('content')
    <form action="{{Route('procesar.curso')}}" method="post">
        @csrf
        <div class="mb-3">


            <label for="" class="form-label" color="red">REGISTRAR CURSO</label>
            <input type="text" name="nombre_curso" id="nombre_curso"  placeholder="ingrese curso" class="form-control">
            <input type="text" name="ciclo" id="ciclo"  placeholder="ingrese ciclo" class="form-control">
            <input type="text" name="creditos" id="creditos"  placeholder="ingrese creditos" class="form-control">
            <input type="text" name="cantidad_alumnos" id="cantidad_alumnos"  placeholder="ingrese cantidad de alumnos" class="form-control">
            <input type="text" name="horario" id="horario"  placeholder="ingrese horario" class="form-control">
            <input type="text" name="id_profesor" id="id_profesor"  placeholder="ingrese id de profesor" class="form-control">
            <input type="text" name="id_mallacurricular" id="id_mallacurricular"  placeholder="ingrese id malla curricular" class="form-control">
            <input type="text" name="id_carrera" id="id_carrera"  placeholder="ingrese id de la  carrera" class="form-control">

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

