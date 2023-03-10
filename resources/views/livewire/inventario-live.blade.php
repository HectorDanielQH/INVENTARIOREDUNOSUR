<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="container mx-auto  flex ">
        <div class="flex w-full justify-center py-4 mx-2">
            <label for="">BUSCA LA UNIDAD</label>
            <select wire:model="id_unidad" id="unidad" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                <option value="" selected>Selecciona una unidad</option>
                @foreach($unidades as $unidad)
                    <option value="{{$unidad->id}}">{{$unidad->NombreUnidad}}</option>
                @endforeach
            </select>
            <button class="block mx-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="authentication-modal" wire:click="MostrarModal()">
                AGREGAR PRODUCTO AL INVENTARIO    
            </button>
            <button class="block ml-2 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" type="button" data-modal-toggle="authentication-modal" wire:click="MostrarModalActivo()">
                TIPO DE ACTIVO    
            </button>
        </div>
    </div>


    
    <!--TABLE CON TAILWIND-->
    <div class="container mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="w-full px-3">
                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <div class="flex flex-wrap -mx-3">
                        <div class="w-full px-3">
                            <table class="table-auto w-full">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-2">CANTIDAD</th>
                                        <th class="px-4 py-2">CODIGO</th>
                                        <th class="px-4 py-2">DETALLE</th>
                                        <th class="px-4 py-2">TIPO DE ACTIVO</th>
                                        <th class="px-4 py-2">SERIE/MODELO</th>
                                        <th class="px-4 py-2">ESTADO</th>
                                        <th class="px-4 py-2">PRECIO</th>
                                        <th class="px-4 py-2">PRECIO CON DEPRECIACI??N</th>
                                        <th class="px-4 py-2">OPCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($inventarios as $item)
                                        <tr>
                                            <td class="border px-4 py-2">{{$item->cantidad}}</td>
                                            <td class="border px-4 py-2">{{$item->codigo}}</td>
                                            <td class="border px-4 py-2">{{$item->detalle}}</td>
                                            <td class="border px-4 py-2">{{$item->activo->Activo}}</td>
                                            <td class="border px-4 py-2">{{$item->serie}}</td>
                                            <td class="border px-4 py-2">
                                                @if ($item->estado == 1)
                                                    {{__('DE BAJA')}}
                                                @elseif ($item->estado == 2)
                                                    {{__('MALO')}}
                                                @elseif ($item->estado == 3)
                                                    {{__('BUENO')}}
                                                @elseif ($item->estado == 4)
                                                    {{__('MUY BUENO')}}
                                                @elseif ($item->estado == 5)
                                                    {{__('NUEVO')}}
                                                @else
                                                    {{__('NO EXISTE')}}
                                                @endif
                                            </td>
                                            <td class="border px-4 py-2">{{$item->precio}}</td>
                                            <td class="border px-4 py-2">
                                                @if($item->activo->Activo=='MUEBLES')
                                                    <!--calcular diferencia entre dias-->
                                                    @php
                                                    $fecha1 = date_create($item->fecha_compra);
                                                    //fecha actual
                                                    $fecha2 = date_create( date("Y-m-d") );
                                                    $dias = date_diff($fecha1, $fecha2)->format('%R%a');
                                                    @endphp
                                                    <!--Redoondeo-->
                                                    {{ round(($item->precio-($item->precio*(0.1/10)*(1/365)*$dias+0)),2) }}
                                                @elseif($item->activo->Activo=='EQUIPO DE COMPUTACION')
                                                    <!--calcular diferencia entre dias-->
                                                    @php
                                                    $fecha1 = date_create($item->fecha_compra);
                                                    //fecha actual
                                                    $fecha2 = date_create( date("Y-m-d") );
                                                    $dias = date_diff($fecha1, $fecha2)->format('%R%a');
                                                    @endphp
                                                    <!--Redoondeo-->
                                                    {{ round(($item->precio-($item->precio*(0.25/4)*(1/365)*$dias+0)),2) }}
                                                @endif
                                            </td>
                                            <td class="border flex px-4 py-2">
                                                <button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="authentication-modal" wire:click="MostrarModalActualizar('{{$item->id}}')">
                                                    <i class="fas fa-edit"></i>  
                                                </button>
                                                <button class="block ml-2 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" type="button" data-modal-toggle="authentication-modal" wire:click="EliminarInventario('{{$item->id}}')">
                                                    <i class="fas fa-trash"></i>  
                                                </button>
                                            </td>
                                        </tr>
                                    @empty
                                            <tr>
                                                <td colspan="9" class="px-4 py-2 text-center">No hay registros</td>
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



    @if($modal)
        <div class="bg-slate-800 bg-opacity-50 flex justify-center items-center fixed top-0 w-full h-screen">
            <div class="relative rounded-lg shadow dark:text-gray-300 bg-gray-700 w-11/12 md:w-1/2 lg:w-1/3">
                <button type="button" wire:click="CerrarModal()" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">REGISTRA EL PRODUCTO</h3>
                    <div class="space-y-6">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="cantidad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CANTIDAD</label>
                                <input type="number" wire:model="cantidadProducto" id="cantidad" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="CANTIDAD" required>
                            </div>
                            <div>
                                <label for="codigoProducto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">C??DIGO DEL PRODUCTO</label>
                                <input type="text" wire:model="codigoProducto" id="codigoProducto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="CODIGO" required>
                            </div>
                        </div>

                        <!--------------------------------------------------------------------------->

                        <div>
                            <label for="descripci??nProducto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">DESCRIPCI??N PRODUCTO</label>
                            <input type="text" wire:model="descripcionProducto" id="descripci??nProducto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="DESCRIPCI??N DEL PRODUCTO" required>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="activoProducto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">TIPO DE ACTIVO</label>
                                <select name="activoProducto" wire:model="activoProducto" id="activoProducto"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                    <option value="">Selecciona una opci??n</option>
                                    @foreach($activos as $activo)
                                        <option value="{{$activo->id}}">{{$activo->Activo}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="unidad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">UNIDAD A LA QUE PERTENECE</label>
                                <select wire:model="id_unidad" id="unidad" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                    <option value="" selected>Selecciona una unidad</option>
                                    @foreach($unidades as $unidad)
                                        <option value="{{$unidad->id}}">{{$unidad->NombreUnidad}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!--------------------------------------------------------------------------->

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="serieProducto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">SERIE MODELO</label>
                                <input type="text" wire:model="serieProducto" id="serieProducto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="INSERTA LA SERIE DEL MODELO" required>
                            </div>
                            <div>
                                <label for="estadoProducto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">SELECCCIONE EL ESTADO</label>
                                <select wire:model="estadoProducto" id="estadoProducto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                    <option value="" selected>Selecciona un estado</option>
                                    <option value="1">DE BAJA</option>
                                    <option value="2">MALO</option>
                                    <option value="3">BUENO</option>
                                    <option value="4">MUY BUENO</option>
                                    <option value="5">NUEVO</option>
                                </select>
                            </div>
                        </div>


                        <!--------------------------------------------------------------------------->

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="precioProducto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">PRECIO DEL PRODUCTO</label>
                                <input type="number" wire:model="precioProducto" id="precioProducto" step="0.01" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="INSERTA UN PRECIO ESTIMADO DEL PRODUCTO" required>
                            </div>
                            <div>
                                <label for="anioCompraProducto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">FECHA DE COMPRA DEL PROD.</label>
                                <input type="date" wire:model="anioCompraProducto" id="anioCompraProducto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="INSERTA UN PRECIO ESTIMADO DEL PRODUCTO" required>
                            </div>
                        </div>

                        <!--------------------------------------------------------------------------->
                        <!--------------------------------------------------------------------------->
                        <!--------------------------------------------------------------------------->
                        <!--------------------------------------------------------------------------->



        
                        <button wire:click="Guardar()" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">REGISTRAR PRODUCTO</button>
                    </div>
                </div>
            </div>
        </div>
    @endif



    @if($modal_activo)
    <div class="bg-slate-800 bg-opacity-50 flex justify-center items-center absolute top-0 right-0 bottom-0 left-0">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button" wire:click="CerrarModalActivo()" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div class="py-6 px-6 lg:px-8">
                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">REGISTRA EL ACTIVO</h3>
                        <div class="space-y-6">
                            <div>
                                <label for="TipoActivo"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">AGREGA EL TIPO DE ACTIVO</label>
                                <div>
                                    <input type="text"  wire:model="TipoActivo" id="TipoActivo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="INGRESA EL ACTIVO" required>                               
                                    <button wire:click="GuardarActivo()" class="w-full my-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Registrar Activo</button>
                                </div>
                            </div>
                            <div class="w-full px-3">
                                <label for="ci"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">LISTA DE ACTIVOS</label>
                                <table class="table-auto w-full">
                                    <thead>
                                        <tr>
                                            <th class="px-4 py-2 text-white">DESCRIPCION</th>
                                            <th class="px-4 py-2 text-white">ELIMINAR</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($activos as $activo)
                                            <tr>
                                                <td class="border px-4 py-2 text-white">{{$activo->Activo}}</td>
                                                <td class="border px-4 py-2">
                                                    <button wire:click="EliminarActivo({{$activo->id}})" class="w-full text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Eliminar</button>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="border px-4 py-2 text-white">No hay activos registrados</td>
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
    @endif
</div>