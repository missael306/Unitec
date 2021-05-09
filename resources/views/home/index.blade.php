@extends('welcome')
@section('content')
<!--Iniciar Sesion-->
<section class="item content">
    <div class="container toparea">
        <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h3 class="text-center">Bienvenido {{auth()->user()->nombres }} {{auth()->user()->primer_apellido  }}</h3>
        </div>
        <br>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form action="{{route('logout')}}" method="post">
                {{ csrf_field() }}
                <button type="submmit" class="btn-danger btn-block">Cerrar Sesión</button>
            </form>
        </div>
    </div>
    </div>
</section>
@endsection