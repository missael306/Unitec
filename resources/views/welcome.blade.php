<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Unitec</title>
    <!--PLUGINS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">

    <!--PLANTILLA-->
    <link href="{{asset('plantilla/css/bootstrap.min.css')}}"  rel="stylesheet" />
    <link href="{{asset('plantilla/css/normalize.css')}}"  rel="stylesheet" />
    <link href="{{asset('plantilla/css/style.css')}}"  rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">

</head>
<body>
     <!--HEADER-->
     <header class="item header margin-top-0">
        <div class="wrapper">
            <nav role="navigation" class="navbar navbar-white navbar-embossed navbar-lg navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
                            <i class="fa fa-bars"></i>
                            <span class="sr-only">Toggle navigation</span>
                        </button>
                        <a href="index.html" class="navbar-brand brand"> Unitec </a>
                    </div>
                    <div id="navbar-collapse-02" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">   
                        @auth                         
                            <li class="propClone"><a href="{{route('default')}}">Home</a></li>   
                        @else
                            <li class="propClone"><a href="{{route('home')}}">Login</a></li>   
                        @endauth                                                                           
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="text-pageheader">
                            <div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.0s">.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="section-content">
        @yield('content')
    </section>

    <!-- FOOTER =============================-->
    <div class="footer text-center">
        <div class="container">
            <div class="row">
                <p class="footernote">
                    Missael Armenta
                </p>
                <ul class="social-iconsfooter">
                    <li><a href="https://www.facebook.com/missael.armentaperalta"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/missael.armenta/?hl=es"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/missael-armenta/"><i class="fa fa-linkedin"></i></a></li>
                </ul>
                <p>
                    &copy; 2021 Unitec<br />
                    Scorilo - Free template by <a href="https://www.wowthemes.net/">WowThemesNet</a>
                </p>
            </div>
        </div>
    </div>

    <!--PLANTILLA-->
    <script src="{{asset('plantilla/js/jquery.js')}}"></script>
    <script src="{{asset('plantilla/js/anime.js')}}"></script>
    <script src="{{asset('plantilla/js/bootstrap.min.js')}}"></script>

    <!--PLUGINS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    
    <!--Modulos JS -->
    <script src="{{asset('unitec/js/comunes/comunes.js')}}"></script>
    @yield('scripts')
</body>
</html>
