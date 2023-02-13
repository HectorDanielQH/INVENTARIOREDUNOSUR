<x-app-layout>
<div>
    <!----------| Remision tailwind |---------->
    <!---------- titulo encabezado con tailwind ---------->
    <div class="container mx-auto mt-5">
        <div class="flex flex-wrap mx-3">
            <div class="w-full px-3">
                <div class="bg-orange-400 shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <div class="flex flex-wrap -mx-3">
                        <div class="w-full flex flex-col justify-center items-center px-3">
                            <h1 class="text-2xl 
                            text-white
                            font-bold text-center">
                                VISUALIZACION DE REMISIÓN
                                <br/>
                                {{__('EMPLEADO: ')}}{{$remisiones[0]->personal->nombre}} {{$remisiones[0]->personal->apellido}}
                                <br/>
                                {{__('REMISIÓN NUMERO: ')}}{{$remisiones[0]->numRemision}}
                            </h1>
                            @if ($remisiones[0]->fechadevolucion==null)
                                <a
                                    href="{{route('pdfremision',['remision'=>$remisiones[0]->numRemision,'dato'=>$remisiones[0]->personal->departamento])
                                    }}"
                                    target="_blank"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded float-right mt-4">
                                    GENERAR PDF
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------| fin titulo encabezado con tailwind |---------->

    <!----------|tabla remision con tailwind |---------->
    <div class="container mx-auto mt-5">
        <div class="flex flex-wrap mx-3">
            <div class="w-full px-3">
                <div class="bg-orange-400 shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <div class="flex flex-wrap -mx-3">
                        <div class="w-full px-3">
                            <table class="table-auto w-full">
                                <thead>
                                    <tr class="bg-gray-100">
                                        <th class="px-4 py-2">COD. MAT.</th>
                                        <th class="px-4 py-2">DESCRIPCION</th>
                                        <th class="px-4 py-2">CANT. PRESTADA</th>
                                        <th class="px-4 py-2">ESTADO DEL PROD. ANTERIOR</th>
                                        <th class="px-4 py-2">FECHA DE PRESTAMO</th>
                                        <th class="px-4 py-2">FECHA DE DEVOLUCIÓN</th>
                                        <th class="px-4 py-2">DETALLE DEL PROD. DEVUELTO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($remisiones as $remision)
                                    <tr class="bg-slate-300">
                                        <td class="border px-4 py-2">{{$remision->inventario->codigo}}</td>
                                        <td class="border px-4 py-2">{{$remision->inventario->detalle}}</td>
                                        <td class="border px-4 py-2">{{$remision->cantidad}}</td>
                                        <td class="border px-4 py-2">
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
                                                @default
                                                    {{'NO DEFINIDO'}}    
                                            @endswitch
                                        </td>
                                        <td class="border px-4 py-2">{{
                                            $remision->created_at->format('d-m-Y')    
                                        }}</td>
                                        <td class="border px-4 py-2">
                                            @if($remision->fechadevolucion==null)
                                                {{'NO DEVUELTO'}}
                                            @else
                                                {{$remision->fechadevolucion}}
                                            @endif
                                        </td>
                                        <td class="border px-4 py-2">
                                            @if($remision->detalledevolucion==null)
                                                {{'NO DEVUELTO'}}
                                            @else
                                                {{$remision->detalledevolucion}}
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>
