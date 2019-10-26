@extends('home')
@section('title', 'Crear Leccion')
@section('contenido')

<div class="col-md-10 col-md-offset-1">
<div class="box box-warning">
  <div class="box-header with-border">
    <h3 class="box-title">General Elements</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    {!! Form::open(['route' => 'cursos.store', 'method' => 'POST']) !!}

      <div class="form-group">
        {!! Form::label('name','Nombre del curso') !!}
        {!! Form::text('nombre',null,['class' =>'form-control', 'placeholder' =>'Nombre de la categoría','required'])!!}

      </div>

      <div class="form-group">
        {!! Form::label('name','Descripcion del curso') !!}

        {!! Form::textarea('descripcion',null,['class' =>'form-control', 'placeholder' =>'Descripcion', 'rows' =>'3','id'=>'editor1'])!!}
      </div>
      <div class="row">

        <div class="form-group col-md-4">
          {{ Form::select('nivel', array('1' => 'Nivel 1', '2' => 'Nivel 2', '3' => 'Nivel 3'), null, ['class' => 'form-control']) }}
        </div>
      </div>

      <div class="form-group">
          {!! Form::hidden('id_user', Auth::user()->id, null,['class' =>'form-control'])!!}
      </div>




      <div class="box-footer">

        {!! Form::submit('Registrar', ['class' =>'btn btn-info pull-right']) !!}

      </div>



    {!! Form::close() !!}
  </div>
  <!-- /.box-body -->
</div>
</div>




@endsection
