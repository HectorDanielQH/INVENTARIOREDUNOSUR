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
        <style>
            *{
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;
}
body{
    background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYK_cHhwEEzpKrsXfvNqELQvKQU-vwV0Fh6A&usqp=CAU");

}
/*BREAKPOINTS*/
@media only screen and (min-width:0px) and (max-width: 768px) {
    body{
        font-family: 'Roboto', sans-serif;
        display: flex;
        flex-direction: column;
        width: 100vw;
        overflow-x: hidden;
        background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYK_cHhwEEzpKrsXfvNqELQvKQU-vwV0Fh6A&usqp=CAU");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
    .navegador-items{
        display: flex;
        align-items: center;
        justify-content: space-around;
        width: 100%;
    }
    .navegador-items i{
        margin-right: 10px;
    }
    .navegador-items a{
        font-size: 15px;
        background-color: #000000;
        padding: 10px 16px;
        border: 2px solid #c31432;
        border-radius: 15px;
        transition: .3s all ease-in-out; 
    }
    .navegador-items a:hover{
        background-color: #c31432;
        color: #c2c2c2;
    }
    .imagen-navegador{
        display: none;
    }
    .contenedor{
        width: 90%;
        margin: auto;
        font-family: 'Cairo', sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }
    .bg_animate{
        width: 100vw;
        height: 100vh;
        position: relative;
        overflow-y: hidden;
    }
    .header_nav{
        width: 100%;
        position: absolute;
        display: flex;
        justify-content: center;
        align-items: center;
        top: 0;
        left: 0;
        overflow-x: hidden;
    }
    .navegador-principal{
        display: flex;
        width: 100%;
        justify-content: space-between;
        align-items: center;
    }
    .header_nav .contenedor{
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px;
    }
    .header_nav h1{
        color: white;
        font-family: 'Gagalin';
    }
    .header_nav nav a{
        color:white;
        text-decoration: none;
        margin-right: 10px;
    }

    .banner{
        display: flex;
        flex-direction: column-reverse;
        justify-content: space-evenly;
        align-items: center;
        height: 100%;
        overflow: hidden;
    }
    .banner_title h2{
        color: white;
        font-size: 60px;
        font-weight: 800;
        margin-bottom: 20px;
    }

    .banner_title .llamanos{
        color: white;
        font-size: 20px;
        text-decoration: none;
        display: inline-block;
        background-color: #1a2849ad;
        padding: 20px;
        border-radius: 10px;
        transition: .3s all ease-in-out;
    }
    .banner_title .llamanos:hover{
        background-color: #1a2849ad;
        box-shadow: 2px 2px 5px #c0c0c085;
        transform: translateY(5px);
    }
    .banner_title .llamanos i{
        margin-right: 10px;
    }
    .banner_img{
        display: flex;
        justify-content: center;
        align-items: center;
        animation: movimiento 2.5s linear infinite;
    }
    .banner_img img{
        width: 80%;
        display: block;
    }

    /*burbujas*/
    .burbujas{
        position: fixed;
        top: -100px;
        width: 100%;
        height: 100%;
        z-index: -1;
    }
    .burbuja{
        border-radius: 50%;
        background: white;
        opacity: 0.3;
        position: absolute;
        bottom: -150;
        animation: burbujas 3s linear infinite;
    }
    .burbuja:nth-child(1){
        width: 80px;
        height: 80px;
        left: 5%;
        animation-duration: 3s;
        animation-delay: 3s;
    } 
    .burbuja:nth-child(2){
        width: 100px;
        height: 100px;
        left: 35%;
        animation-duration: 3s;
        animation-delay: 5s;
    }
    .burbuja:nth-child(3){
        width: 20px;
        height: 20px;
        left: 15%;
        animation-duration: 1.5s;
        animation-delay: 7s;
    }
    .burbuja:nth-child(4){
        width: 50px;
        height: 50px;
        left: 90%;
        animation-duration: 6s;
        animation-delay: 3s;
    }
    .burbuja:nth-child(5){
        width: 70px;
        height: 70px;
        left: 65%;
        animation-duration: 3s;
        animation-delay: 1s;
    }
    .burbuja:nth-child(6){
        width: 20px;
        height: 20px;
        left: 50%;
        animation-duration: 4s;
        animation-delay: 5s;
    }
    .burbuja:nth-child(7){
        width: 20px;
        height: 20px;
        left: 50%;
        animation-duration: 4s;
        animation-delay: 5s;
    }
    .burbuja:nth-child(8){
        width: 100px;
        height: 100px;
        left: 52%;
        animation-duration: 5s;
        animation-delay: 5s;
    }
    .burbuja:nth-child(9){
        width: 65px;
        height: 65px;
        left: 51%;
        animation-duration: 3s;
        animation-delay: 2s;
    }
    .burbuja:nth-child(10){
        width: 40px;
        height: 40px;
        left: 35%;
        animation-duration: 3s;
        animation-delay: 4s;
    }
    /*Letras rivadavia*/
    .letras-header{
        font-family: 'Piedra', cursive;
    }

    .letras-header>*{
        transition: 0.3s all ease-in-out;
    }
    .lh:nth-child(1){
        color: #fd7200;
        font-size: 70px;
    }
    .lh:nth-child(2){
        color: #fd7200;
        font-size: 70px;
        margin-left: -10px;
    }
    .lh:nth-child(3){
        color: #fd7200;
        font-size: 70px;
        margin-left: -10px;
    }
    .lh:nth-child(4){
        color: #252525;
        font-size: 70px;
        margin-left: -18px;
    }

    .lh:nth-child(1):hover{
        font-size: 110px;
        text-shadow: 1px 1px 10px #fd7200
    }
    .lh:nth-child(2):hover{
        font-size: 110px;
        text-shadow: 1px 1px 10px #fd7200;
    }
    .lh:nth-child(3):hover{
        font-size: 110px;
        text-shadow: 1px 1px 10px #EFC501;
    }
    .lh:nth-child(4):hover{
        font-size: 110px;
        text-shadow: 1px 1px 10px #434343;
    }


    .letras-header-sc{
        font-size: 35px;
        font-family: 'Cairo', sans-serif;
        color: white;
        margin-top: -55px;
    }
    @keyframes burbujas{
        0%{
            bottom: 0;
            opacity: 0;
        }
        30%{
            transform: translateX(30px);
        }
        50%{
            opacity: 0.4;
        }
        100%{
            bottom: 100vh;
            opacity: 0;
        }
    }
    @keyframes movimiento{
        0%{
            transform: translateY(0px);
        }
        50%{
            transform: translateY(30px);
        }
        100%{
            transform: translateY(0px);
        }
    }



    .mision-vision{
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
        height: 100vh;
        width: 90%;
        margin: auto;
        z-index: -5;
        margin-bottom: 50px;
        overflow-x: hidden;
    }

    .card{
        width: 100%;
        height: 40%;
        background-color: #252525;
        border-radius: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        box-shadow: 0px 0px 30px #00000071;
    }
    .card:nth-child(1){
        background-color: #fd7200;
    }
    .card:nth-child(2){
        background-color: #dfa018;
    }
    .card:nth-child(3){
        background-color: #fd7200;
    }
    .card-img{
        display: none;
    }
    .card-text{
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        align-items: center;
        width: 80%;
        height: 40%;
    }
    .card-text h3{
        font-size: 20px;
        color: rgb(224, 224, 224);
        text-shadow: 1px 1px 10px #000000;
    }
    .card-text p{
        font-size: 18px;
        color: rgb(255, 255, 255);
        text-align: justify;
    }
    /*SERVICIOS*/

    .servicios{
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        align-items: center;
        width: 90%;
        margin: auto;
        border-radius: 20px;
        z-index: -5;
        box-shadow: 0px 0px 30px #00000071;
    }
    .medio-servicios{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .card-serv{
        width:90%;
        border-radius: 0px 100px 100px 0px;
        margin: 0px 0px;
        padding: 30px;
        
    }
    .card-serv:nth-child(1){
        background-color: #00D4DC;
    }
    .card-serv:nth-child(1) p{
        font-size: 12px;
    }
    .card-serv:nth-child(2) p{
        font-size: 12px;
    }
    .card-serv:nth-child(3) p{
        font-size: 12px;
    }
    .card-serv:nth-child(4) p{
        font-size: 12px;
    }
    .card-serv:nth-child(2){
        background-color: #FF0057;
    }
    .card-serv:nth-child(3){
        background-color: #EFC501;
    }
    .card-serv:nth-child(4){
        background-color: #252525;
    }
    .img-derecha{
        display: none
    }
    .img-derecha div{
        display: none;
    }

    .texto-priv{
        font-size: 12px;
        color: rgba(255, 255, 255, 0.89);
        text-shadow: 1px 1px 10px #000000;
        padding: 20px 15px;
        margin: auto;
    }
    /*pie de pagina*/
    .pie-pagina{
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-direction: column;
        height: 30vh;
        width: 100%;
        margin: 50px 0 0 0;
        z-index: -5;
        background-color: rgba(67, 67, 67, 0.575);
        color: white;
    }
}
@media only screen and (min-width: 768px) and (max-width: 992px){
    body{
        font-family: 'Roboto', sans-serif;
        display: flex;
        flex-direction: column;
        width: 100vw;
        overflow-x: hidden;
        background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYK_cHhwEEzpKrsXfvNqELQvKQU-vwV0Fh6A&usqp=CAU");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
    .navegador-items{
        display: flex;
        align-items: center;
        justify-content: space-around;
        width: 100%;
    }
    .navegador-items i{
        margin-right: 10px;
    }
    .navegador-items a{
        font-size: 15px;
        background-color: #000000;
        padding: 10px 16px;
        border: 2px solid #c31432;
        border-radius: 15px;
        transition: .3s all ease-in-out; 
    }
    .navegador-items a:hover{
        background-color: #c31432;
        color: #c2c2c2;
    }
    .imagen-navegador{
        display: none;
    }
    .contenedor{
        width: 90%;
        margin: auto;
        font-family: 'Cairo', sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }
    .bg_animate{
        width: 100vw;
        height: 100vh;
        position: relative;
        overflow-y: hidden;
    }
    .header_nav{
        width: 100%;
        position: absolute;
        display: flex;
        justify-content: center;
        align-items: center;
        top: 0;
        left: 0;
        overflow-x: hidden;
    }
    .navegador-principal{
        display: flex;
        width: 100%;
        justify-content: space-between;
        align-items: center;
    }
    .header_nav .contenedor{
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px;
    }
    .header_nav h1{
        color: white;
        font-family: 'Gagalin';
    }
    .header_nav nav a{
        color:white;
        text-decoration: none;
        margin-right: 10px;
    }

    .banner{
        display: flex;
        flex-direction: column-reverse;
        justify-content: space-evenly;
        align-items: center;
        height: 100%;
        overflow: hidden;
    }
    .banner_title h2{
        color: white;
        font-size: 60px;
        font-weight: 800;
        margin-bottom: 20px;
    }

    .banner_title .llamanos{
        color: white;
        font-size: 20px;
        text-decoration: none;
        display: inline-block;
        background-color: #1a2849ad;
        padding: 20px;
        border-radius: 10px;
        transition: .3s all ease-in-out;
    }
    .banner_title .llamanos:hover{
        background-color: #1a2849ad;
        box-shadow: 2px 2px 5px #c0c0c085;
        transform: translateY(5px);
    }
    .banner_title .llamanos i{
        margin-right: 10px;
    }
    .banner_img{
        display: flex;
        justify-content: center;
        align-items: center;
        animation: movimiento 2.5s linear infinite;
    }
    .banner_img img{
        width: 50%;
        display: block;
    }

    /*burbujas*/
    .burbujas{
        position: fixed;
        top: -100px;
        width: 100%;
        height: 100%;
        z-index: -1;
    }
    .burbuja{
        border-radius: 50%;
        background: white;
        opacity: 0.3;
        position: absolute;
        bottom: -150;
        animation: burbujas 3s linear infinite;
    }
    .burbuja:nth-child(1){
        width: 80px;
        height: 80px;
        left: 5%;
        animation-duration: 3s;
        animation-delay: 3s;
    } 
    .burbuja:nth-child(2){
        width: 100px;
        height: 100px;
        left: 35%;
        animation-duration: 3s;
        animation-delay: 5s;
    }
    .burbuja:nth-child(3){
        width: 20px;
        height: 20px;
        left: 15%;
        animation-duration: 1.5s;
        animation-delay: 7s;
    }
    .burbuja:nth-child(4){
        width: 50px;
        height: 50px;
        left: 90%;
        animation-duration: 6s;
        animation-delay: 3s;
    }
    .burbuja:nth-child(5){
        width: 70px;
        height: 70px;
        left: 65%;
        animation-duration: 3s;
        animation-delay: 1s;
    }
    .burbuja:nth-child(6){
        width: 20px;
        height: 20px;
        left: 50%;
        animation-duration: 4s;
        animation-delay: 5s;
    }
    .burbuja:nth-child(7){
        width: 20px;
        height: 20px;
        left: 50%;
        animation-duration: 4s;
        animation-delay: 5s;
    }
    .burbuja:nth-child(8){
        width: 100px;
        height: 100px;
        left: 52%;
        animation-duration: 5s;
        animation-delay: 5s;
    }
    .burbuja:nth-child(9){
        width: 65px;
        height: 65px;
        left: 51%;
        animation-duration: 3s;
        animation-delay: 2s;
    }
    .burbuja:nth-child(10){
        width: 40px;
        height: 40px;
        left: 35%;
        animation-duration: 3s;
        animation-delay: 4s;
    }
    /*Letras rivadavia*/
    .letras-header{
        font-family: 'Piedra', cursive;
    }

    .letras-header>*{
        transition: 0.3s all ease-in-out;
    }
    .lh:nth-child(1){
        color: #fd7200;
        font-size: 70px;
    }
    .lh:nth-child(2){
        color: #FF0057;
        font-size: 70px;
        margin-left: -10px;
    }
    .lh:nth-child(3){
        color: #EFC501;
        font-size: 70px;
        margin-left: -10px;
    }
    .lh:nth-child(4){
        color: #252525;
        font-size: 70px;
        margin-left: -18px;
    }

    .lh:nth-child(1):hover{
        font-size: 110px;
        text-shadow: 1px 1px 10px #fd7200;
    }
    .lh:nth-child(2):hover{
        font-size: 110px;
        text-shadow: 1px 1px 10px #FF0057;
    }
    .lh:nth-child(3):hover{
        font-size: 110px;
        text-shadow: 1px 1px 10px #EFC501;
    }
    .lh:nth-child(4):hover{
        font-size: 110px;
        text-shadow: 1px 1px 10px #434343;
    }


    .letras-header-sc{
        font-size: 35px;
        font-family: 'Cairo', sans-serif;
        color: white;
        margin-top: -55px;
    }
    @keyframes burbujas{
        0%{
            bottom: 0;
            opacity: 0;
        }
        30%{
            transform: translateX(30px);
        }
        50%{
            opacity: 0.4;
        }
        100%{
            bottom: 100vh;
            opacity: 0;
        }
    }
    @keyframes movimiento{
        0%{
            transform: translateY(0px);
        }
        50%{
            transform: translateY(30px);
        }
        100%{
            transform: translateY(0px);
        }
    }



    .mision-vision{
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
        height: 100vh;
        width: 90%;
        margin: auto;
        z-index: -5;
        margin-bottom: 50px;
        overflow-x: hidden;
    }

    .card{
        width: 100%;
        height: 40%;
        background-color: #252525;
        border-radius: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        box-shadow: 0px 0px 30px #00000071;
    }
    .card:nth-child(1){
        background-color: #be1b36;
    }
    .card:nth-child(2){
        background-color: #dfa018;
    }
    .card:nth-child(3){
        background-color: #5DC7C7;
    }
    .card-img{
        display: none;
    }
    .card-text{
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        align-items: center;
        width: 80%;
        height: 40%;
    }
    .card-text h3{
        font-size: 20px;
        color: rgb(224, 224, 224);
        text-shadow: 1px 1px 10px #000000;
    }
    .card-text p{
        font-size: 18px;
        color: rgb(255, 255, 255);
        text-align: justify;
    }
    /*SERVICIOS*/

    .servicios{
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        align-items: center;
        width: 90%;
        margin: auto;
        border-radius: 20px;
        z-index: -5;
        box-shadow: 0px 0px 30px #00000071;
    }
    .medio-servicios{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .card-serv{
        width:90%;
        border-radius: 0px 100px 100px 0px;
        margin: 0px 0px;
        padding: 30px;
        
    }
    .card-serv:nth-child(1){
        background-color: #00D4DC;
    }
    .card-serv:nth-child(1) p{
        font-size: 12px;
    }
    .card-serv:nth-child(2) p{
        font-size: 12px;
    }
    .card-serv:nth-child(3) p{
        font-size: 12px;
    }
    .card-serv:nth-child(4) p{
        font-size: 12px;
    }
    .card-serv:nth-child(2){
        background-color: #FF0057;
    }
    .card-serv:nth-child(3){
        background-color: #EFC501;
    }
    .card-serv:nth-child(4){
        background-color: #252525;
    }
    .img-derecha{
        display: none
    }
    .img-derecha div{
        display: none;
    }

    .texto-priv{
        font-size: 12px;
        color: rgba(255, 255, 255, 0.89);
        text-shadow: 1px 1px 10px #000000;
        padding: 20px 15px;
        margin: auto;
    }
    /*pie de pagina*/
    .pie-pagina{
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-direction: column;
        height: 30vh;
        width: 100%;
        margin: 50px 0 0 0;
        z-index: -5;
        background-color: rgba(67, 67, 67, 0.575);
        color: white;
    }
}

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) and (max-width: 1200px) {
    body{
        font-family: 'Roboto', sans-serif;
        display: flex;
        flex-direction: column;
        width: 100vw;
        overflow-x: hidden;
        background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYK_cHhwEEzpKrsXfvNqELQvKQU-vwV0Fh6A&usqp=CAU");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
    .navegador-items i{
        margin-right: 10px;
    }
    .navegador-items a{
        background-color: #000000;
        padding: 5px 25px;
        border: 2px solid #c31432;
        border-radius: 15px;
        transition: .3s all ease-in-out; 
    }
    .navegador-items a:hover{
        background-color: #c31432;
        color: #c2c2c2;
    }
    .imagen-navegador{
        width: 200px;
    }
    .contenedor{
        width: 90%;
        max-width: 1200px;
        margin: auto;
        font-family: 'Cairo', sans-serif;
    }
    .bg_animate{
        width: 100vw;
        height: 100vh;
        position: relative;
        overflow-y: hidden;
    }
    .header_nav{
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
    }
    .header_nav .contenedor{
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px;
    }
    .header_nav h1{
        color: white;
        font-family: 'Gagalin';
    }
    .header_nav nav a{
        color:white;
        text-decoration: none;
        margin-right: 10px;
    }

    .banner{
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 100%;
    }
    .banner_title h2{
        color: white;
        font-size: 60px;
        font-weight: 800;
        margin-bottom: 20px;
    }

    .banner_title .llamanos{
        color: white;
        font-size: 20px;
        text-decoration: none;
        display: inline-block;
        background-color: #1a2849ad;
        padding: 20px;
        border-radius: 10px;
        transition: .3s all ease-in-out;
    }
    .banner_title .llamanos:hover{
        background-color: #1a2849ad;
        box-shadow: 2px 2px 5px #c0c0c085;
        transform: translateY(5px);
    }
    .banner_title .llamanos i{
        margin-right: 10px;
    }
    .banner_img{
        animation: movimiento 2.5s linear infinite;
    }
    .banner_img img{
        width: 600px;
        display: block;
    }

    /*burbujas*/
    .burbujas{
        position: fixed;
        top: -100px;
        width: 100%;
        height: 100%;
        z-index: -1;
    }
    .burbuja{
        border-radius: 50%;
        background: white;
        opacity: 0.3;
        position: absolute;
        bottom: -150;
        animation: burbujas 3s linear infinite;
    }
    .burbuja:nth-child(1){
        width: 80px;
        height: 80px;
        left: 5%;
        animation-duration: 3s;
        animation-delay: 3s;
    } 
    .burbuja:nth-child(2){
        width: 100px;
        height: 100px;
        left: 35%;
        animation-duration: 3s;
        animation-delay: 5s;
    }
    .burbuja:nth-child(3){
        width: 20px;
        height: 20px;
        left: 15%;
        animation-duration: 1.5s;
        animation-delay: 7s;
    }
    .burbuja:nth-child(4){
        width: 50px;
        height: 50px;
        left: 90%;
        animation-duration: 6s;
        animation-delay: 3s;
    }
    .burbuja:nth-child(5){
        width: 70px;
        height: 70px;
        left: 65%;
        animation-duration: 3s;
        animation-delay: 1s;
    }
    .burbuja:nth-child(6){
        width: 20px;
        height: 20px;
        left: 50%;
        animation-duration: 4s;
        animation-delay: 5s;
    }
    .burbuja:nth-child(7){
        width: 20px;
        height: 20px;
        left: 50%;
        animation-duration: 4s;
        animation-delay: 5s;
    }
    .burbuja:nth-child(8){
        width: 100px;
        height: 100px;
        left: 52%;
        animation-duration: 5s;
        animation-delay: 5s;
    }
    .burbuja:nth-child(9){
        width: 65px;
        height: 65px;
        left: 51%;
        animation-duration: 3s;
        animation-delay: 2s;
    }
    .burbuja:nth-child(10){
        width: 40px;
        height: 40px;
        left: 35%;
        animation-duration: 3s;
        animation-delay: 4s;
    }
    /*Letras rivadavia*/
    .letras-header{
        font-family: 'Piedra', cursive;
    }

    .letras-header>*{
        transition: 0.3s all ease-in-out;
    }
    .lh:nth-child(1){
        color: #fd7200;
        font-size: 100px;
    }
    .lh:nth-child(2){
        color: #FF0057;
        font-size: 100px;
        margin-left: -10px;
    }
    .lh:nth-child(3){
        color: #EFC501;
        font-size: 100px;
        margin-left: -10px;
    }
    .lh:nth-child(4){
        color: #252525;
        font-size: 100px;
        margin-left: -18px;
    }

    .lh:nth-child(1):hover{
        font-size: 110px;
        text-shadow: 1px 1px 10px #fd7200;
    }
    .lh:nth-child(2):hover{
        font-size: 110px;
        text-shadow: 1px 1px 10px #FF0057;
    }
    .lh:nth-child(3):hover{
        font-size: 110px;
        text-shadow: 1px 1px 10px #EFC501;
    }
    .lh:nth-child(4):hover{
        font-size: 110px;
        text-shadow: 1px 1px 10px #434343;
    }


    .letras-header-sc{
        font-size: 35px;
        font-family: 'Cairo', sans-serif;
        color: white;
        margin-top: -55px;
    }
    @keyframes burbujas{
        0%{
            bottom: 0;
            opacity: 0;
        }
        30%{
            transform: translateX(30px);
        }
        50%{
            opacity: 0.4;
        }
        100%{
            bottom: 100vh;
            opacity: 0;
        }
    }
    @keyframes movimiento{
        0%{
            transform: translateY(0px);
        }
        50%{
            transform: translateY(30px);
        }
        100%{
            transform: translateY(0px);
        }
    }



    .mision-vision{
        display: flex;
        justify-content: space-around;
        align-items: center;
        height: 100vh;
        width: 90%;
        margin: auto;
        z-index: -5;
    }

    .card{
        width: 25%;
        height: 60%;
        background-color: #252525;
        border-radius: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        box-shadow: 0px 0px 30px #00000071;
    }
    .card:nth-child(1){
        margin-top: 150px;
        background-color: #be1b36;
    }
    .card:nth-child(2){
        margin-top: -170px;
        background-color: #dfa018;
    }
    .card:nth-child(3){
        margin-top: 200px;
        background-color: #5DC7C7;
    }
    .card-img{
        width: 100%;
        height: 50%;
    }
    .card-img img{
        width: 100%;
        height: 100%;
    }
    .card-text{
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        align-items: center;
        width: 80%;
        height: 50%;
    }
    .card-text h3{
        font-size: 25px;
        color: rgb(224, 224, 224);
        margin-top: -20px;
        text-shadow: 1px 1px 10px #000000;
    }
    .card-text p{
        font-size: 14px;
        color: rgb(255, 255, 255);
        margin-top: -20px;
        text-align: justify;
    }
    /*SERVICIOS*/

    .servicios{
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        align-items: center;
        height: 90vh;
        width: 90%;
        margin: auto;
        border-radius: 50px;
        z-index: -5;
        box-shadow: 0px 0px 30px #00000071;
        overflow: hidden;
    }
    .medio-servicios{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .card-serv{
        width:90%;
        border-radius: 0px 100px 100px 0px;
        margin: 0px 0px;
        padding: 30px;
        
    }
    .card-serv:nth-child(1){
        background-color: #00D4DC;
    }
    .card-serv:nth-child(2){
        background-color: #FF0057;
    }
    .card-serv:nth-child(3){
        background-color: #EFC501;
    }
    .card-serv:nth-child(4){
        background-color: #252525;
    }
    .img-derecha{
        display: none
    }
    .img-derecha div{
        display: none;
    }

    .texto-priv{
        font-size: 25px;
        color: rgba(255, 255, 255, 0.89);
        text-shadow: 1px 1px 10px #000000;
    }
    /*pie de pagina*/
    .pie-pagina{
        display: flex;
        justify-content: space-around;
        align-items: center;
        height: 40px;
        width: 100%;
        margin: 50px 0 0 0;
        z-index: -5;
        background-color: rgba(67, 67, 67, 0.575);
        color: white;
        overflow-x: hidden;
    }
}

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
    body{
        font-family: 'Roboto', sans-serif;
        display: flex;
        flex-direction: column;
        width: 100vw;
        overflow-x: hidden;
        background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYK_cHhwEEzpKrsXfvNqELQvKQU-vwV0Fh6A&usqp=CAU");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
    .navegador-items i{
        margin-right: 10px;
    }
    .navegador-items a{
        background-color: #000000;
        padding: 5px 25px;
        border: 2px solid #c31432;
        border-radius: 15px;
        transition: .3s all ease-in-out; 
    }
    .navegador-items a:hover{
        background-color: #c31432;
        color: #c2c2c2;
    }
    .imagen-navegador{
        width: 200px;
    }
    .contenedor{
        width: 90%;
        max-width: 1200px;
        margin: auto;
        font-family: 'Cairo', sans-serif;
    }
    .bg_animate{
        width: 100vw;
        height: 100vh;
        position: relative;
        overflow-y: hidden;
    }
    .header_nav{
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
    }
    .header_nav .contenedor{
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px;
    }
    .header_nav h1{
        color: white;
        font-family: 'Gagalin';
    }
    .header_nav nav a{
        color:white;
        text-decoration: none;
        margin-right: 10px;
    }

    .banner{
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 100%;
    }
    .banner_title h2{
        color: white;
        font-size: 60px;
        font-weight: 800;
        margin-bottom: 20px;
    }

    .banner_title .llamanos{
        color: white;
        font-size: 20px;
        text-decoration: none;
        display: inline-block;
        background-color: #1a2849ad;
        padding: 20px;
        border-radius: 10px;
        transition: .3s all ease-in-out;
    }
    .banner_title .llamanos:hover{
        background-color: #1a2849ad;
        box-shadow: 2px 2px 5px #c0c0c085;
        transform: translateY(5px);
    }
    .banner_title .llamanos i{
        margin-right: 10px;
    }
    .banner_img{
        animation: movimiento 2.5s linear infinite;
    }
    .banner_img img{
        width: 600px;
        display: block;
    }

    /*burbujas*/
    .burbujas{
        position: fixed;
        top: -100px;
        width: 100%;
        height: 100%;
        z-index: -1;
    }
    .burbuja{
        border-radius: 50%;
        background: white;
        opacity: 0.3;
        position: absolute;
        bottom: -150;
        animation: burbujas 3s linear infinite;
    }
    .burbuja:nth-child(1){
        width: 80px;
        height: 80px;
        left: 5%;
        animation-duration: 3s;
        animation-delay: 3s;
    } 
    .burbuja:nth-child(2){
        width: 100px;
        height: 100px;
        left: 35%;
        animation-duration: 3s;
        animation-delay: 5s;
    }
    .burbuja:nth-child(3){
        width: 20px;
        height: 20px;
        left: 15%;
        animation-duration: 1.5s;
        animation-delay: 7s;
    }
    .burbuja:nth-child(4){
        width: 50px;
        height: 50px;
        left: 90%;
        animation-duration: 6s;
        animation-delay: 3s;
    }
    .burbuja:nth-child(5){
        width: 70px;
        height: 70px;
        left: 65%;
        animation-duration: 3s;
        animation-delay: 1s;
    }
    .burbuja:nth-child(6){
        width: 20px;
        height: 20px;
        left: 50%;
        animation-duration: 4s;
        animation-delay: 5s;
    }
    .burbuja:nth-child(7){
        width: 20px;
        height: 20px;
        left: 50%;
        animation-duration: 4s;
        animation-delay: 5s;
    }
    .burbuja:nth-child(8){
        width: 100px;
        height: 100px;
        left: 52%;
        animation-duration: 5s;
        animation-delay: 5s;
    }
    .burbuja:nth-child(9){
        width: 65px;
        height: 65px;
        left: 51%;
        animation-duration: 3s;
        animation-delay: 2s;
    }
    .burbuja:nth-child(10){
        width: 40px;
        height: 40px;
        left: 35%;
        animation-duration: 3s;
        animation-delay: 4s;
    }
    /*Letras rivadavia*/
    .letras-header{
        font-family: 'Piedra', cursive;
    }

    .letras-header>*{
        transition: 0.3s all ease-in-out;
    }
    .lh:nth-child(1){
        color: #fd7200;
        font-size: 100px;
    }
    .lh:nth-child(2){
        color: #fd7200;
        font-size: 100px;
        margin-left: -10px;
    }
    .lh:nth-child(3){
        color: #fd7200;
        font-size: 100px;
        margin-left: -10px;
    }
    .lh:nth-child(4){
        color: #fd7200;
        font-size: 100px;
        margin-left: -18px;
    }

    .lh:nth-child(1):hover{
        font-size: 110px;
        text-shadow: 1px 1px 10px #fd7200;
    }
    .lh:nth-child(2):hover{
        font-size: 110px;
        text-shadow: 1px 1px 10px #fd7200;
    }
    .lh:nth-child(3):hover{
        font-size: 110px;
        text-shadow: 1px 1px 10px #fd7200;
    }
    .lh:nth-child(4):hover{
        font-size: 110px;
        text-shadow: 1px 1px 10px #fd7200;
    }


    .letras-header-sc{
        font-size: 35px;
        font-family: 'Cairo', sans-serif;
        color: white;
        margin-top: -55px;
    }
    @keyframes burbujas{
        0%{
            bottom: 0;
            opacity: 0;
        }
        30%{
            transform: translateX(30px);
        }
        50%{
            opacity: 0.4;
        }
        100%{
            bottom: 100vh;
            opacity: 0;
        }
    }
    @keyframes movimiento{
        0%{
            transform: translateY(0px);
        }
        50%{
            transform: translateY(30px);
        }
        100%{
            transform: translateY(0px);
        }
    }



    .mision-vision{
        display: flex;
        justify-content: space-around;
        align-items: center;
        height: 100vh;
        width: 90%;
        margin: auto;
        z-index: -5;
    }

    .card{
        width: 25%;
        height: 60%;
        background-color: #252525;
        border-radius: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        box-shadow: 0px 0px 30px #00000071;
    }
    .card:nth-child(1){
        margin-top: 150px;
        background-color: #be1b36;
    }
    .card:nth-child(2){
        margin-top: -170px;
        background-color: #dfa018;
    }
    .card:nth-child(3){
        margin-top: 200px;
        background-color: #5DC7C7;
    }
    .card-img{
        width: 100%;
        height: 50%;
    }
    .card-img img{
        width: 100%;
        height: 100%;
    }
    .card-text{
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        align-items: center;
        width: 80%;
        height: 50%;
    }
    .card-text h3{
        font-size: 30px;
        color: rgb(224, 224, 224);
        margin-top: -20px;
        text-shadow: 1px 1px 10px #000000;
    }
    .card-text p{
        font-size: 18px;
        color: rgb(255, 255, 255);
        margin-top: -20px;
        text-align: justify;
    }
    /*SERVICIOS*/

    .servicios{
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        align-items: center;
        height: 90vh;
        width: 90%;
        margin: auto;
        border-radius: 50px;
        z-index: -5;
        box-shadow: 0px 0px 30px #00000071;
    }
    .medio-servicios{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .card-serv{
        width:90%;
        border-radius: 0px 100px 100px 0px;
        margin: 0px 0px;
        padding: 30px;
    }
    .card-serv:nth-child(1){
        background-color: #fd7200;
    }
    .card-serv:nth-child(2){
        background-color: #fd7200;
    }
    .card-serv:nth-child(3){
        background-color: #fd7200;
    }
    .card-serv:nth-child(4){
        background-color: #fd7200;
    }
    .img-derecha{
        display: flex;
        width:200%;
        height: 100%;
        background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYK_cHhwEEzpKrsXfvNqELQvKQU-vwV0Fh6A&usqp=CAU");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        border-radius: 100px 0px 0px 100px;
    }
    .img-derecha div{
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.363);
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 100px 0px 0px 100px;
    }

    .texto-priv{
        font-size: 30px;
        color: rgba(255, 255, 255, 0.89);
        margin-top: -20px;
        text-shadow: 1px 1px 10px #000000;
    }
    /*pie de pagina*/
    .pie-pagina{
        display: flex;
        justify-content: space-around;
        align-items: center;
        height: 40px;
        width: 100%;
        margin: 50px 0 0 0;
        z-index: -5;
        background-color: rgba(67, 67, 67, 0.575);
        color: white;
    }

}
        </style>
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
