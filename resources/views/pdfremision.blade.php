<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REPORTE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="">
        <img
            style=" height: 80px;"
            src="{{asset('images/pdf.png')}}" alt="">    
    </div>
    <div>
        <h1 class="
            text-center
        "
        style="font-size: 30px; font-weight: bold; font-family: Robot, sans-serif;"
        >
            RED UNO SUR
        </h1>
        <h2 class="
            text-center
        "
        style="font-size: 20px; font-weight: bold; font-family: Robot, sans-serif;"

        >
            REMISIÓN DE MATERIALES
        </h2>
    </div>
    <br>
    <div>
        <h3 
            style="font-size: 15px; font-weight: bold; font-family: Robot, sans-serif;"
        >
            Para el personal: {{$remisiones[0]->personal->nombre}} {{$remisiones[0]->personal->apellido}}
        </h3>
        <h3
            style="font-size: 15px; font-weight: bold; font-family: Robot, sans-serif;"
        >
            Remisión número: {{$remisiones[0]->numRemision}}
        </h3>
        <h3 
            style="font-size: 15px; font-weight: bold; font-family: Robot, sans-serif;"
        >
            Fecha de prestamo: {{$remisiones[0]->created_at->format('d/m/Y')}}
        </h3>
        <h3 
            style="font-size: 15px; font-weight: bold; font-family: Robot, sans-serif;"
        >
            Departamento de prestamo: {{$remisiones[0]->departamentos->Departamento}}
        </h3>
        <br>
    </div>

    <div>
        <h4
            style="font-size: 12px; color:blue; font-weight: bold; font-family: Robot, sans-serif;"
        >
            Adjunto a la presente, nos permitimos enviar y/o devolver el siguiente material
        </h4>
    </div>

    <div>
        <table 
            class="table table-bordered"
            style="border: 1px solid black;"
        >
            <thead>
                <tr style="
                    border: 1px solid black;
                    font-size: 15px;
                    font-weight: bold;
                    font-family: Robot, sans-serif;
                    text-align: center;
                    "
                >
                    <th style="
                    border: 1px solid black;
                ">COD. MAT.</th>
                    <th style="
                    border: 1px solid black;
                ">CANT. PRESTADA</th>
                    <th style="
                    border: 1px solid black;
                ">DESCRIPCION</th>
                    <th style="
                    border: 1px solid black;
                ">ESTADO DEL PROD. PRESTADO</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($remisiones as $remision)
                <tr
                    style="
                        border: 1px solid black;
                        font-size: 15px;
                        font-family: Robot, sans-serif;
                        text-align: center;
                    "
                >
                    <td style="
                    border: 1px solid black;
                ">{{$remision->inventario->codigo}}</td>
                    <td style="
                    border: 1px solid black;
                ">{{$remision->cantidad}}</td>
                    <td style="
                    border: 1px solid black;
                ">{{$remision->inventario->detalle}}</td>
                    <td style="
                    border: 1px solid black;
                ">
                        @switch($remision->inventario->estado)
                            @case(1)
                                {{'DE BAJA'}}
                                @break
                            @case(2)
                                {{'MALO'}}
                                @break
                            @case(3)
                                {{'BUENO'}}
                                @break
                            @case(4)
                                {{'MUY BUENO'}}
                                @break
                            @case(5)
                                {{'NUEVO'}}
                                @break
                        @endswitch
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div>
        <h3 style="
                    font-size: 15px;
                    font-weight: bold;
                    font-family: Robot, sans-serif;
                    text-align: center;
                    ">.................................</h3>
        <h3 style="
                    font-size: 15px;
                    font-weight: bold;
                    font-family: Robot, sans-serif;
                    text-align: center;
                    ">Emisor</h3>
    </div>
</body>
</html>