@extends('layouts.app')
@section('content')


    <h>mostrar profesores</h>


    @foreach ($profesors as $profesor)
        <p>
        <table style="border: 1px solid">
            <tr>
                <th>nombres</th>
                <th>apellidos</th>
                <th>direcion</th>
                <th>correo institucional</th>
            </tr>
            <tr>
                <td>{{$profesor["nombres"]}}</td>
                <td>{{$profesor["apellidos"]}}</td>
                <td>{{$profesor["direccion"]}}</td>
                <td>{{$profesor["correo_institucional"]}}</td>

            </tr>
        </table>
        </p>
    @endforeach

@endsection
