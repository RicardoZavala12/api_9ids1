@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Formulario</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-body">
            <form action="{{ route('guardar.profesor') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$profesor->id}}">

                <div class="form-group">
                    <label for="num_empleado">Número de Empleado</label>
                    <input type="number" name="num_empleado" value="{{$profesor->num_empleado}}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" value="{{$profesor->nombre}}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="num_horas">Numero de Horas</label>
                    <input type="Number" name="num_horas" value="{{$profesor->num_horas}}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="division_id">División</label>
                    <select name="division_id" id="division_id" class="form-control" required>
                        <option value="">Seleccione una división</option>
                        <?php 
                        use App\Models\Division;
                        $divisiones = Division::all();
                        foreach ($divisiones as $division) : ?>
                            <option value="{{ $division->id }}" {{ $profesor->division_id == $division->id ? 'selected' : '' }}>{{ $division->nombre }}</option>
                            <?php endforeach; ?>
                        </select>
                </div>

               <div class="form-group">
                    <label for="inicio_contrato">Inicio de Contrato</label>
                    <input type="date" name="inicio_contrato" value="{{$profesor->inicio_contrato}}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="nombre">Fin de Contrato</label>
                    <input type="date" name="fin_contrato" value="{{$profesor->fin_contrato}}" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@stop