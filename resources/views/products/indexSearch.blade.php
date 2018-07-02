@extends('layouts.app')

@section('content')
<style>

button{
  color: black;
}
.panel-body{
  margin: auto;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
            <div class="panel-body">

              {!! Form::open(array('rout' => 'queries.search')) !!}
              {!! Form::text('search', null,
                                     array('required',
                                          'class'=>'form-control',
                                          'placeholder'=>'Busca un Producto...')) !!}
              {!! Form::submit('Busca',
                                          array('class'=>'btn btn-default')) !!}
              {!! Form::close() !!}

            </div>
          </div>
        </div>
    </div>
</div>


@endsection
