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
                <form action="" id="contactform">
                    <div class="form">
                        <input type="text" name="email" placeholder="Email *" required="required">
                        <input type="password" name="contrasena" placeholder="Contraseña *" required="required">
                        <input type="submit" id="submit" class="clearfix btn" value="Iniciar">                    
                    </div>                
                </form>            
            </div>
        </div>
    </div>
</section>
@endsection