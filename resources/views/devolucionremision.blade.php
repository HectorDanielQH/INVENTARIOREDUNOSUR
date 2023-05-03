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
                                DEVOLUCIÓN DE REMISIÓN
                                <br/>
                                {{__('EMPLEADO: ')}}{{$remisiones[0]->personal->nombre}} {{$remisiones[0]->personal->apellido}}
                                <br/>
                                {{__('REMISIÓN NUMERO: ')}}{{$remisiones[0]->numRemision}}
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------| fin titulo encabezado con tailwind |---------->

    <!----------|tabla remision con tailwind |---------->
    <form class="container mx-auto mt-5"
        action="{{route('remisionmaterial.update', [$remisiones[0]->numRemision,'dato'=>$remisiones[0]->personal->departamento])}}"
        method="POST"
    >
    @csrf
    @method('PUT')
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
                                        <input 
                                            type="hidden"
                                            value="{{$remision->id}}"
                                            name="id{{$loop->iteration}}"
                                        >
                                        <td class="border px-4 py-2">
                                            @if ($remision->detalledevolucion != null)
                                                <input
                                                    type="date" 
                                                    name="fechadevolucion{{$loop->iteration}}" 
                                                    value="{{$remision->fechadevolucion}}"
                                                    disabled>
                                            @else
                                                <input
                                                    type="date" 
                                                    name="fechadevolucion{{$loop->iteration}}" 
                                                    value="{{$remision->fechadevolucion}}"
                                                    required>
                                            @endif
                                        </td>
                                        <td class="border px-4 py-2">
                                            @if ($remision->detalledevolucion != null)
                                                <textarea 
                                                    name="detalleproducto{{$loop->iteration}}" 
                                                    cols="30" 
                                                    rows="10" 
                                                    disabled
                                                >{{$remision->detalledevolucion}}</textarea>
                                            @else
                                                <textarea 
                                                    name="detalleproducto{{$loop->iteration}}" 
                                                    cols="30" 
                                                    rows="10" 
                                                    required
                                                >{{$remision->detalledevolucion}}</textarea>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="w-full flex justify-around">
                                <a 
                                    class="mt-7 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                    href="{{
                                    redirect()->back()->getTargetUrl()
                                }}">
                                    <i class="fas fa-arrow-left"></i>
                                    {{__('CANCELAR')}}
                                </a>
                                <button type="submit" class=" mt-7 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"

                                >
                                    <i class="fas fa-save"></i>
                                    {{__('GUARDAR')}}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

</x-app-layout>