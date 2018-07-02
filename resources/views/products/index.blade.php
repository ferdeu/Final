@extends('layouts.app')

@section('content')

<style>
	.thumbnail {
    position: relative;
    padding: 0px;
    margin-bottom: 20px;
}

.thumbnail img {
	height: 200px;
    width: 100%;
}
li {
	list-style-type:none;
	}
ul {
	padding: 0;
	}
</style>	
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <div class="container" id="tourpackages-carousel">
      
      <div class="row">
             @foreach ($products as $product)
        <div class="col-xs-18 col-sm-6 col-md-3">
         	      
			<div class="thumbnail">
              <ul>
             	<li>
                <img src="{{ asset('storage/' . $product->fotopath) }}" alt="">
                  </li>

              
              </ul>
              <div class="caption">
				     	              <ul>
                <li class="product"><h4><a href="/productos/{{$product->id}}">{{$product->name}}</a></h4>
					<a href="/productos/{{$product->id}}">${{$product->getPrice()}}</a>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<p><a href="#" class="btn btn-info btn-xs" role="button">Agregar al carrito</a></p>
                  </li>

           
              </ul>
            </div>
          </div>
        </div>
		     @endforeach
		        </div><!-- End row -->
      
    </div><!-- End container -->

@endsection
