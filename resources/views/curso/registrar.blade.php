@extends('layouts.app')
@section('content')
    <form action="" method="post">
        @csrf
        <div class="mb-3">


            <label for="" class="form-label" color="red">REGISTRAR CURSO</label>
            <input type="text" name="" id="" value="" placeholder="ingrese curso" class="form-control">
            <input type="text" name="" id="" value="" placeholder="ingrese ciclo" class="form-control">
            <input type="text" name="" id="" value="" placeholder="ingrese creditos" class="form-control">
            <input type="text" name="" id="" value="" placeholder="ingrese cantidad de alumnos" class="form-control">
            <input type="text" name="" id="" value="" placeholder="ingrese horario" class="form-control">
            <input type="text" name="" id="" value="" placeholder="ingrese id de profesor" class="form-control">
            <input type="text" name="" id="" value="" placeholder="ingrese id malla curricular" class="form-control">
            <input type="text" name="" id="" value="" placeholder="ingrese id de la  carrera" class="form-control">

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
