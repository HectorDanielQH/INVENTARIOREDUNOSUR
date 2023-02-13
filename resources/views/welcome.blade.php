<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>RED UNO SUR</title>
        <link rel="stylesheet" href="{{asset('css/homeinit.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="shortcut icon" href="{{asset('images/og_image.jpg')}}" type="image/x-icon">
    </head>
    <body>
        <header class="bg_animate">
            <div class="header_nav">
                <div class="contenedor">
                    <img class="imagen-navegador" src="{{asset('image/logo.png')}}" alt="">
                    <nav class="navegador-principal">
                            @if (Route::has('login'))
                            <div class="navegador-items" style="margin: 15px">
                                @auth
                                    <a href="{{ url('/sucursal') }}" class=""><i class="fas fa-tachometer-alt"></i>PAGINA PRINCIPAL</a>
                                @else
                                    <a href="{{ route('login') }}" class=""> <i class="fas fa-user"></i> INICIAR SESION</a>
                                @endauth
                            </div>
                            @endif
                    </nav>
                </div>
            </div>


            <section class="banner contenedor">
                <section class="banner_title">
                    <h2 class="letras-header animate__animated animate__zoomIn">
                        <span class="lh">RED</span>
                        <span class="lh"> - </span>
                        <span class="lh">UNO</span>
                    </h2>
                    <h3 class="letras-header-sc animate__animated animate__slideInLeft">Somos lo mejor de Bolivia</h3>
                </section>
                <div class="banner_img">
                    <img class="animate__animated animate__zoomInDown" src="
                    {{asset('images/og_image.jpg')}}
                    " style="width: 25rem; border-radius:50%;" alt="">
                </div>
            </section>
            <div class="burbujas">
                <div class="burbuja"></div>
                <div class="burbuja"></div>
                <div class="burbuja"></div>
                <div class="burbuja"></div>
                <div class="burbuja"></div>
                <div class="burbuja"></div>
                <div class="burbuja"></div>
                <div class="burbuja"></div>
                <div class="burbuja"></div>
                <div class="burbuja"></div>
            </div>
        </header>
    </body>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/102099bbc5.js" crossorigin="anonymous"></script>
    <script defer>
        AOS.init();
    </script>
</html>
