@extends('adminlte::page')
@section('content')
    <div>
        <div class="box">
            <h3 class="box-title">Lista de Archivos</h3>
        </div>
        <div class="box-body">
            <table id="table-data" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Número de Empleado</th>
                        <th>Nombre</th>
                        <th>Numero de Horas</th>
                        <th>División</th>
                        <th>Inicio de Contrato</th>
                        <th>Fin de Contrato</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($profesores as $profesor)
                        <tr>
                            <td> {{ $profesor['num_empleado'] }} </td>
                            <td> {{ $profesor['nombre'] }} </td>
                            <td> {{ $profesor['num_horas'] }} </td>
                            <td> {{ $profesor['division_id'] }} </td>
                            <td> {{ $profesor['inicio_contrato'] }} </td>
                            <td> {{ $profesor['fin_contrato'] }} </td>
                            <td>
                                <ul class="list-inline m-0">
                                    <li class="list-inline-item">
                                        <a href="{{route('nuevo.profesor', ['id' => $profesor->id])}}" class="btn btn-sucess btn-sm rounded-0">
                                            <span class="far fa-edit">Editar</span>
                                        <a href="{{route('eliminar.profesor', ['id' => $profesor->id])}}" class="btn btn-danger btn-sm rounded-0">
                                            <span class="far fa-trash-alt">Eliminar</span>
                                        </a>
                                    </li>
                                </ul>
                            </td> 
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('js')
<script>
    $('#table-data').DataTable({
        "scrollx": true
    });

</script>
@stop