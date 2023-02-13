<div>
    <div class="container mx-auto mt-5">
        <div class="flex flex-wrap mx-3">
            <div class="w-full px-3">
                <div class="bg-orange-400 shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <!--crear un select y un input cantidad-->
                    <div>
                        <div class="flex flex-wrap -mx-3">
                            @if($agregarremisionsi)
                                <div class="w-6/12 px-3">
                                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-state">
                                        Personal
                                    </label>
                                    <div class="relative">
                                        <select wire:model="idPersonal" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                            <option value="">Seleccione</option>
                                            @foreach($personal as $per)
                                                <option value="{{$per->id}}">{{$per->nombre}} {{$per->apellido}}</option>
                                            @endforeach
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path d="M10 12a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 2a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <button wire:click="agregarRemisionessi" class="bg-blue-500 mt-5 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                            Agregar Remisión
                                    </button>
                                </div>
                            @else
                                <div class="w-6/12 px-3">
                                    <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-state">
                                        Personal
                                    </label>
                                    <div class="relative">
                                        <select wire:model="idPersonal" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline disabled" disabled>
                                            <option value="">Seleccione</option>
                                            @foreach($personal as $per)
                                                <option value="{{$per->id}}">{{$per->nombre}} {{$per->apellido}}</option>
                                            @endforeach
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path d="M10 12a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 2a4 4 0 1 0 0-8 4 4 0 0 0 0 8z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="w-6/12 px-3">
                                <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-state">
                                    Busque por código el objeto a prestar
                                </label>
                                <div class="relative">
                                    <input wire:model="busqueda" type="text" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" placeholder="Código">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--tabla de inventarios-->
    <div class="container mx-auto mt-5">
        <div class="flex flex-wrap mx-3">
            <div class="w-full px-3">
                <div class="bg-orange-400 shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="px-4 py-2">Código</th>
                                    <th class="px-4 py-2">Descripción</th>
                                    <th class="px-4 py-2">Cantidad</th>
                                    <th class="px-4 py-2">Cantidad Prestada</th>
                                    <th class="px-4 py-2">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($inventarios as $inv)
                                    <tr>
                                        <td class="border px-4 py-2">{{$inv->codigo}}</td>
                                        <td class="border px-4 py-2">{{$inv->detalle}}</td>
                                        <td class="border px-4 py-2">{{$inv->cantidad}}</td>
                                        <td class="border px-4 py-2">{{
                                            $inv->remisiones==null ? 0 : $inv->remisiones->sum('cantidad')
                                        }}</td>
                                        <td class="border px-4 py-2 flex justify-center items-center">
                                            @if($inv->remisiones != null)
                                                @if($inv->cantidad-$inv->remisiones->sum('cantidad')==0)
                                                    <button class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded disabled" disabled>
                                                        SE ACABÓ
                                                    </button>
                                                @else
                                                    <button wire:click="agregar({{$inv->id}})" class="bg-lime-600 hover:bg-lime-700 text-white font-bold py-2 px-4 rounded">
                                                        Agregar
                                                    </button>
                                                @endif
                                            @else
                                                <button wire:click="agregar({{$inv->id}})" class="bg-lime-600 hover:bg-lime-700 text-white font-bold py-2 px-4 rounded">
                                                    Agregar
                                                </button>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="border px-4 py-2" colspan="6">No hay resultados</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--REPORTE DE PRESTAMOS DE ESTE USUARIO-->
    <div class="container mx-auto mt-5">
        <h1 class="text-2xl font-bold text-center">Reporte del préstamo</h1>
    </div>
    <div class="container mx-auto mt-5">
        <div class="flex flex-wrap mx-3">
            <div class="w-full px-3">
                <div class="bg-orange-400 shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="px-4 py-2">Código</th>
                                    <th class="px-4 py-2">Descripción</th>
                                    <th class="px-4 py-2">Cantidad Prestada</th>
                                    <th class="px-4 py-2">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($remisiones as $remision)
                                    <tr>
                                        <td class="border px-4 py-2">{{$remision->inventario->codigo}}</td>
                                        <td class="border px-4 py-2">{{$remision->inventario->detalle}}</td>
                                        <td class="border px-4 py-2">{{$remision->cantidad}}</td>
                                        <td class="border px-4 py-2 flex justify-center items-center">
                                            <button wire:click="eliminarRemision({{$remision->id}})" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                                Eliminar
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="border px-4 py-2" colspan="6">No hay resultados</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--BOTON DE PRESTAR-->
    @if(!$agregarremisionsi)
        <div class="container mx-auto mt-5">
            <div class="flex flex-wrap mx-3">
                <div class="w-full px-3">
                    <div>
                        <div class="overflow-x-auto">
                            <div class="flex justify-start">
                                <button wire:click="Guardardatosall" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                    Guardar Préstamo
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
