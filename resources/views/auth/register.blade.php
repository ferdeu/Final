@extends('layouts.app')

@section('content')
<style>
button {
  background: none;
  color: lightblue;
  border: none;
  padding: 0;
  font: inherit;
  cursor: pointer;
  outline: inherit;
 }
 input[type=checkbox], input[type=radio] {
    margin: 10px 0 0;
    margin-top: 1px\9;
    line-height: normal;
  }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1 style="font-family: 'Lora'";>Registrate!</h1></div>

                <div class="panel-body">
                    <form name="signupForm" novalidate class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('dni') ? ' has-error' : '' }}">
                            <label for="apellido" class="col-md-4 control-label">Apellido</label>

                            <div class="col-md-6">
                                <input id="apellido" type="apellido" class="form-control" name="apellido" value="{{ old('apellido') }}"required>

                                @if ($errors->has('apellido'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellido') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Direccion E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                                <small class="form-text text-muted" style="color:white">Al menos 6 caracteres, debe contenter letras en mayúsculas y minúsculas y números</small>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirmation" class="col-md-4 control-label">Confirmar Password</label>

                            <div class="col-md-6">
                                <input id="password-confirmation" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="termsCondition">He leído y acepto los <button id="termsConditionButton" type="button" class="" data-toggle="modal" data-target="#termsConditionModal">Términos y condiciones</button></label>
                            <div class="col-md-6">
                                <input id="termsCondition" type="checkbox" class="" name="termsCondition" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrarse
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Términos y Condiciones -->
<div id="termsConditionModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Términos y condiciones</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="terms-text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit, eros sed ultrices pulvinar, dolor urna lobortis libero, nec vestibulum arcu dolor at neque. Proin purus ligula, iaculis sit amet consectetur sit amet, aliquam eget orci. Curabitur eleifend sapien efficitur est semper, at porttitor lorem molestie. Nulla ac tincidunt dolor. Proin sollicitudin felis est, nec convallis enim maximus vel. Suspendisse mi sem, pulvinar sit amet congue hendrerit, pulvinar non quam. Donec urna odio, interdum at convallis non, suscipit a est.

          Integer tincidunt nisi et faucibus euismod. Vestibulum fringilla dolor sed lacus aliquam ultricies. Sed in massa non massa egestas ultricies. Mauris sit amet odio malesuada, pellentesque orci sit amet, vestibulum sapien. Duis rutrum lectus et egestas mollis. Pellentesque mattis velit at dictum pellentesque. Pellentesque lectus lorem, dictum tempor fermentum ac, cursus ut nulla. Aenean rhoncus ante quis ligula pulvinar, gravida congue dolor tempus. Nunc in ligula vitae justo ullamcorper laoreet. Aliquam viverra nunc eu massa fringilla, fringilla varius enim maximus. Phasellus id ante elementum, aliquam metus vel, tempus nibh. Nam sed risus in risus pulvinar lobortis. Sed a quam ac massa elementum tristique ut quis ex. Donec metus velit, gravida vel efficitur vitae, imperdiet at magna. Aliquam erat volutpat.

          Mauris eget ex nec felis placerat porttitor non at libero. Sed maximus lacus malesuada feugiat scelerisque. Integer eu porta erat. Etiam molestie magna quis tempus tincidunt. Nullam vitae libero cursus, vehicula neque vitae, pharetra purus. Phasellus id justo orci. Quisque rhoncus tincidunt sem et viverra. Suspendisse placerat urna eu eros ornare, in bibendum urna posuere. Aliquam ac lacus vel magna condimentum hendrerit vel ut dolor. Etiam et accumsan nibh. Morbi hendrerit turpis et lectus consequat, nec tincidunt turpis mollis. Morbi et posuere lacus. Curabitur sed lorem nec quam mollis molestie. Nunc molestie, purus sit amet lacinia finibus, odio purus gravida nisl, dignissim eleifend risus nisl vitae nisi. Donec interdum enim odio, quis consequat nunc accumsan sit amet.

          Integer lacinia non purus ac rhoncus. Nunc iaculis, mi eget rhoncus bibendum, nisl lectus porttitor tellus, ut tempor elit magna in est. Sed ut ornare nulla. Suspendisse viverra pharetra nulla ut interdum. Maecenas condimentum ullamcorper est, non condimentum sapien. Integer consequat malesuada tortor, ut dapibus massa. Curabitur vehicula diam sit amet iaculis interdum. Vivamus vestibulum nulla est, in posuere orci lobortis eget. Suspendisse elementum nibh non tempus facilisis. Vivamus sed congue orci. Morbi volutpat ipsum scelerisque sem imperdiet accumsan vel id lorem. Nunc a volutpat arcu. Curabitur metus libero, aliquam ut euismod nec, accumsan vel odio. Sed nec vestibulum diam, eu molestie odio. Nulla sed massa porta, consectetur ante ut, varius dui.

          Maecenas dapibus aliquam magna nec dictum. Nulla facilisi. Phasellus id luctus sem. Mauris iaculis blandit nisi, nec gravida ligula porttitor quis. Vivamus placerat, libero quis mollis aliquet, nisl felis pulvinar orci, ut maximus risus urna pulvinar turpis. Aliquam id elit sapien. In ultrices dui felis, nec sodales mi ultrices eleifend. Donec dapibus tellus at lectus sollicitudin, in bibendum nisi facilisis. Maecenas molestie ut risus laoreet fringilla. Aenean id sapien nec mauris tincidunt lacinia ut quis mi. Integer nec tellus rutrum, condimentum massa a, pharetra nisl. Suspendisse vitae congue lectus. Fusce consequat tincidunt neque, sit amet mattis massa efficitur vitae. Curabitur nisl ex, pellentesque eu libero vitae, auctor tempor velit. In at luctus eros, maximus vulputate orci.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- /Modal de Términos y Condiciones -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{ asset('js/signup.js') }}"></script>
@endsection
