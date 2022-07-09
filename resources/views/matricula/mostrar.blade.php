@extends('layouts.app')
@section('content')


        <table border="1px solid #000000" >
            <tr>
                <th>nombre curso</th>
                <th>ciclo </th>
                <th>creditos  </th>
                <th>horario  </th>
                <th>id_profesor </th>
            </tr>
            <form>
            @foreach($cursos as $curso)
            <tr>
                <td>{{$curso["nombre_curso"]}}</td>
                <td>{{$curso["ciclo"]}}</td>
                <td>{{$curso["creditos"]}}</td>
                <td>{{$curso["horario"]}}</td>
                <td>{{$curso["id_profesor"]}}</td>
                <td><input type="checkbox" id="cbox1" value="{{$curso["id"]}}"></td>
                <td></td>

            </tr>

    @endforeach
                <tr>
                    <td>
                        <input type="submit" value="guardar">
                    </td>
                </tr>

           </form>
        </table>
@endsection
