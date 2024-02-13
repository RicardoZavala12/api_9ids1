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
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($puestos as $puesto)
                        <tr>
                            <td> {{ $puesto['codigo'] }} </td>
                            <td> {{ $puesto['nombre'] }} </td>
                            <td>
                                <ul class="list-inline m-0">
                                    <li class="list-inline-item">
                                        <a href="{{route('nuevo.puesto', ['id' => $puesto->id])}}" class="btn btn-sucess btn-sm rounded-0">
                                            <span class="far fa-edit">Editar</span>
                                        <a href="{{route('eliminar.puesto', ['id' => $puesto->id])}}" class="btn btn-danger btn-sm rounded-0">
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