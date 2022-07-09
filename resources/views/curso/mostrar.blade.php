@extends('layouts.app')
@section('content')

    @foreach($cursos as $curso)
    <table border="1px solid #000000" >
        <tr>
            <th>nombre curso</th>
            <th>ciclo </th>
            <th>creditos  </th>
            <th>horario  </th>
            <th>id_profesor </th>
        </tr>
        <tr>
            <td>{{$curso["nombre_curso"]}}</td>
            <td>{{$curso["ciclo"]}}</td>
            <td>{{$curso["creditos"]}}</td>
            <td>{{$curso["horario"]}}</td>
            <td>{{$curso["id_profesor"]}}</td>

            <td></td>

        </tr>
    </table>
    @endforeach

@endsection
