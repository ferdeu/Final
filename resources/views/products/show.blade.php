@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BudgetFork</title>

	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <style>
  .panel-body{
    text-align: center;
  }

  ul {
    list-style-type: circle;
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 40%;
  }
  button {
      background-color: #af4c4c;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
  }
  img{
      max-width:100%;
      max-height:450px;
  }
  </style>
</head>

<body>

  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Productos</div>

                  <div class="panel-body">
                    <h1>{{$product->name}}</h1>
                    <p>Costo: {{$product->cost}}</p>
                    <p>Precio de Lista: {{$product->getPrice()}}</p>
                    <p>Categoria: {{$category->name}}</p>
                    <img src="{{ asset('/storage/' . $product->fotopath) }}" alt="">
                    <!-- <p>Propiedades:</p>
                    <ul>
                        @foreach ($properties as $property)
                            <li>{{$property->name}}</li>
                        @endforeach
                    </ul> -->
                    <form action="/productos/{{$product->id}}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                        <button type="submit">Borrar Producto</button>
                    </form>
					<form action="/productos/{{$product->id}}/edit" method="post">
                        {{ csrf_field() }}
                        <button type="submit" name="button" class="btn btn-primary">Editar Producto</button>
                    </form>
                    <a href="/productos">Volver</a>
                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection
