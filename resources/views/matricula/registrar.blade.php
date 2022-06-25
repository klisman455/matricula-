@extends('layouts.app')
@section('content')
    <form action="" method="post">
        @csrf
        <div class="mb-3">


            <label for="" class="form-label" color="red">REGISTRAR CURSO</label>
            <input type="text" name="" id="" value="" placeholder="ingrese fecha" class="form-control">
            <input type="text" name="" id="" value="" placeholder="ingrese hora" class="form-control">
            <input type="text" name="" id="" value="" placeholder="ingrese id curso" class="form-control">
            <input type="text" name="" id="" value=" "  class="form-control">           <! id usuario interno–-->

        </div>
        <input type="submit" value="guardar" class="btn btn-primary">

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
