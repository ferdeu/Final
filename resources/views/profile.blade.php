@extends('layouts.app')

@section('content')
<style>

.btn {
  display: block;
  margin-left: inherit;
  margin-right: auto;
  margin-top: 2%;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
            <div class="panel-body">
            <form class="form-horizontal" enctype="multipart/form-data" action="/profile/{{Auth::user()->id}}" method="POST">
				{{ csrf_field() }}
            	{{ method_field('patch') }}
              <img src="{{ asset('storage/' . Auth::user()->image) }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
              <h2>Perfil de {{ Auth::user()->nombre }} {{ Auth::user()->apellido }}</h2>
                <label>Actualizar Imagen de Perfil</label>
                <input type="file" name="image" id="image">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="btn btn-sm btn-primary" value="Actualizar">
				
            </form>
            </div>
          </div>
        </div>
    </div>
</div>


@endsection
