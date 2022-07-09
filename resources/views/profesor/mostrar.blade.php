@extends('layouts.app')
@section('content')


    <h>mostrar profesores</h>



        <p>
        <table style="border: 1px solid">
            <tr>
                <th>nombres</th>
                <th>apellidos</th>
                <th>direcion</th>
                <th>correo institucional</th>
            </tr>
            @foreach ($profesors as $profesor)
            <tr>
                <td>{{$profesor["nombres"]}}&nbsp</td>
                <td>{{$profesor["apellidos"]}}&nbsp</td>
                <td>{{$profesor["direccion"]}}&nbsp</td>
                <td>{{$profesor["correo_institucional"]}}&nbsp</td>

            </tr>
        @endforeach
        </table>
        </p>


@endsection
