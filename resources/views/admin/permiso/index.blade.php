@extends("theme.$theme.layout")
@section('titulo')
Seguridad
@endsection
@section('contenido')


<h3 class="box-title">Permisos</h3>
<div class="box-body table-responsive no-padding ">
  <table class="table table-bordered table-hover table-striped">
    <thead>
      <tr>
        <th style="width: 10px">ID</th>
        <th>Permiso</th>
        <th>slug</th>
        <th>Accion</th>
      </tr>
    </thead>
    <tbody>
      @foreach($permisos as $permiso)
      <tr>
        <td>{{$permiso->id}}</td>
        <td>{{$permiso->nombre}}</td>
        <td>{{$permiso->slug}}</td>
        <td>E</td>
      </tr>
      @endforeach
    </tbody>

  </table>
</div>
@endsection

  