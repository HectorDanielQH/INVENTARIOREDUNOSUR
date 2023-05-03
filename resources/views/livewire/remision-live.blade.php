<div>
    <!----------| Remision tailwind |---------->
    <!---------- titulo encabezado con tailwind ---------->
    <div class="container mx-auto mt-5">
        <div class="flex flex-wrap mx-3">
            <div class="w-full px-3">
                <div class="bg-orange-400 shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <div class="flex flex-wrap -mx-3">
                        <div class="w-full px-3">
                            <h1 class="text-2xl 
                            text-white
                            font-bold text-center">
                                BIENVENIDO A LA SECCION DE REMISIONES
                            </h1>
                            <!--boton de agregar con tailwind-->
                            <div class="flex justify-center items-center mt-5">
                                <!--enlace redireccion-->
                                <div class="container w-4/5 mx-auto pt-7 pb-3">
                                    <a
                                    class="bg-orange-500 hover:bg-orange-700 shadow-md shadow-gray-700 text-white font-bold py-2 px-4 rounded" 
                                    href="
                                        {{
                                            route('pagadmin.index',['id' => $departamento])
                                        }}
                                    ">
                                        <i class="fa-solid fa-arrow-left"></i>
                                        VOLVER ATRAS
                                    </a>
                                </div>
                                <a href="{{route('remisionmaterial.Remision',['req'=>$departamento])}}" class="bg-green-500 hover:bg-green-700 shadow-md shadow-gray-700 text-white font-bold py-2 px-4 rounded">
                                    AGREGAR REMISIONES
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------| fin titulo encabezado con tailwind |---------->
    <!----------|busca remision con tailwind |---------->
    <div class="container mx-auto mt-5">
        <div class="flex flex-wrap mx-3">
            <div class="w-full px-3">
                <div class="bg-orange-400 shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <div class="flex flex-wrap -mx-3">
                       <!--SELECT CON TAILWIND-->
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-state">
                                PERSONAL A QUIEN SE PRESTO EL MATERIAL
                            </label>
                            <div class="relative">
                                <select wire:model="personalPrestamo" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="">SELECCIONE UNA OPCION</option>
                                    @foreach ($personal as $item)
                                        <option value="{{$item->id}}">{{$item->nombre}} {{$item->apellido}}</option>
                                    @endforeach
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M10 12a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 2a4 4 0 1 0 0-8 4 4 0 0 0 0 8z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <!--FIN SELECT CON TAILWIND-->
                        <div class="w-full px-3 mt-5">
                            <label class="block uppercase tracking-wide text-white text-xs font-bold mb-2" for="grid-state">
                                FECHA DE PRESTAMO DE MATERIAL
                            </label>
                            <div class="flex justify-center items-center"> 
                                <span class="
                                text-white
                                mr-2
                                ">
                                    DE:
                                </span>
                                <input type="date" wire:model="fechadesde" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                <span class="
                                text-white
                                mx-2
                                ">
                                    HASTA:
                                </span>
                                <input type="date" wire:model="fechahasta" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------|fin busca remision con tailwind |---------->
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
                                        <th class="px-4 py-2">COD. REMISION</th>
                                        <th class="px-4 py-2">PERSONAL</th>
                                        <th class="px-4 py-2">FECHA DE DEVOLUCIÓN</th>
                                        <th class="px-4 py-2">ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($remision as $rem)
                                        <tr class="
                                        @if ($rem->fechadevolucion == null)
                                            bg-red-500
                                        @else
                                            bg-green-500
                                        @endif
                                        ">
                                        <!--filas-->
                                            <td class="border px-4 py-2 text-white">{{
                                                $rem->numRemision
                                            }}</td>
                                            <td class="border px-4 py-2 text-white">{{$rem->personal->nombre}} {{$rem->personal->apellido}}</td>
                                            <td class="border px-4 py-2 text-white">
                                                @if ($rem->fechadevolucion == null)
                                                    <!--span moderno-->
                                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-red-100 text-red-800">
                                                        NO DEVUELTO
                                                    </span>
                                                @else
                                                    {{$rem->fechadevolucion}}
                                                @endif
                                            </td>
                                            <td class="border px-4 py-2 flex justify-center items-center">
                                                <!--boton moderno con tailwind-->
                                                <a href="
                                                    {{route('remisionmaterial.show', [$rem->numRemision,'dato'=>$rem->personal->departamento])}}
                                                "
                                                class="bg-blue-500 hover:bg-blue-700 text-white shadow-black shadow-sm font-bold py-2 px-2 my-2 mx-2 rounded">
                                                    VER
                                                </a>

                                                
                                                @if ($rem->fechadevolucion == null)
                                                    <!--span moderno-->
                                                    <a href="
                                                        {{route('remisionmaterial.edit', [$rem->numRemision, 'dato'=>$rem->personal->departamento])}}
                                                    "
                                                    class="bg-green-500 hover:bg-green-700 text-white shadow-black shadow-sm font-bold py-2 px-2 my-2 mx-2 rounded">
                                                        DEVOLUCIÓN
                                                    </a>

                                                @endif
                                            </td>
                                        <!--fin filas-->
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="border px-4 py-2">No hay registros</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
