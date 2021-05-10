@extends('welcome')
@section('content')
<!--Iniciar Sesion-->
<section class="item content">
    <div class="container toparea">
        <div class="underlined-title">
            <div class="editContent">
                <h1 class="text-center latestitems">Iniciar Sesión</h1>
            </div>
            <div class="wow-hr type_short">
                <span class="wow-hr-h">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </span>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <form action="{{route('autenticar')}}" method="post" id="contactform">
                    {{ csrf_field() }}
                    <div class="form-group">
                        {!! $errors->first('login','<span class="help-block">:message</span>')!!}                        
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" placeholder="Email *"  required="required" value="{{old('email')}}">
                        {!! $errors->first('email','<span class="help-block">:message</span>')!!}                        
                    </div> 
                    <div class="form-group">                        
                        <input type="password" name="password" placeholder="Contraseña *" required="required">                                                
                        {!! $errors->first('password','<span class="help-block">:message</span>')!!}                        
                    </div> 
                    <div class="form-group">                        
                        <input type="submit" id="submit" class="clearfix btn" value="Iniciar">                            
                        <p class="text-center btn-crear-cuenta" data-toggle="modal" data-target="#mdlCrearCuenta" >Crear cuenta</p>                
                    </div>                
                </form>            
            </div>
        </div>
    </div>
</section>

<!--Modal Crear Cuenta-->
<div class="modal fade" tabindex="-1" role="dialog" id="mdlCrearCuenta">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Crear Cuenta</h4>
            </div>
            <div class="modal-body">
                @include('login/crear_cuenta')
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" form="frmRegistrar" class="btn btn-primary btn-sm">Crear cuenta</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    <script src="{{asset('unitec/js/login/login.js')}}"></script>
@endsection
