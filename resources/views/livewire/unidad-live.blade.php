<div>
    <!--enlace redireccion-->
    <div class="container w-4/5 mx-auto pt-7 pb-3">
        <a
        class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded animate-pulse" 
        href="
            {{
                 route('pagadmin.index',['id' => $departamento])
            }}
        ">
            <i class="fa-solid fa-arrow-left"></i>
            VOLVER ATRAS
        </a>
    </div>


    <div class="container mx-auto flex justify-center py-4">
        <label for="busqueda" class="text-white uppercase mr-4">Ingresa el nombre de la unidad</label>
        <input type="text" id="busqueda" class="w-full px-4 py-2 rounded-md outline-none border-gray-300 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:text-white dark:border-gray-500 dark:focus:border-blue-500 dark:focus:ring-blue-500" wire:model="busqueda" pattern="[A-Z\s]+" required>
        <button class="ml-4 px-4 py-2 text-sm font-medium text-white bg-orange-700 rounded-md hover:bg-orange-800 focus:outline-none focus:ring-4 focus:ring-orange-300 dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800" type="button" data-modal-toggle="authentication-modal" wire:click="MostrarModal()">AGREGAR MAS UNIDADES</button>
    </div>
    
    <script>
        let input = document.getElementById('busqueda');
        input.addEventListener('input', function() {
            this.value = this.value.replace(/[^a-zA-Z\s]/g, '');
        });
    </script>
    
    
    
    <div class="container mx-auto bg-gray-900 text-white">
        <div class="flex flex-wrap -mx-3">
            <div class="w-full px-3">
                <div class="bg-gray-900 shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full px-3">
                    <table class="table-auto w-full">
                        <thead>
                        <tr class="bg-orange-500 text-white">
                            <th class="px-4 py-2">DESCRIPCIÓN DE LA UNIDAD</th>
                            <th class="px-4 py-2">OPCIONES</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($unidad as $unidades)
                        <tr>
                            <td class="px-4 py-2 text-orange-500 text-center">{{$unidades->NombreUnidad}}</td>
                            <td class="px-4 py-2 flex justify-center items-center">
                                <button class="block mx-1 text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800" type="button" data-modal-toggle="authentication-modal" wire:click="MostrarModalActualizar('{{$unidades->NombreUnidad}}','{{$unidades->NombreUnidad}}')">
                                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.293 15.707l-1 1a1 1 0 000 1.414l3 3a1 1 0 001.414 0l1-1a1 1 0 000-1.414l-3-3a1 1 0 00-1.414 0zm15.414-9.414l-8 8a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414l8-8a1 1 0 011.414 0l3 3a1 1 0 010 1.414z"/></svg>
                                 
                                </button>
                                <button class="block mx-1 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" type="button" data-modal-toggle="authentication-modal" wire:click="EliminarUsuario('{{$unidades->NombreUnidad}}')">
                                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-2.35-9.65a1 1 0 011.41 0L10 8.59l1.94-1.94a1 1 0 011.41 1.41L11.41 10l1.94 1.94a1 1 0 01-1.41 1.41L10 11.41l-1.94 1.94a1 1 0 01-1.41-1.41L8.59 10 6.65 8.06a1 1 0 010-1.41z" clip-rule="evenodd"/></svg>                                     
                                </button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="px-4 py-2 text-center">No hay registros</td>
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
    <div class="bg-slate-800 bg-opacity-50 flex justify-center items-center absolute top-0 right-0 bottom-0 left-0">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button" wire:click="CerrarModal()" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div class="py-6 px-6 lg:px-8">
                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">REGISTRA LA UNIDAD</h3>
                        <div class="space-y-6">
                            <div>
                                <label for="nombre"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">DESCRIPCIÓN DE LA UNIDAD</label>
                                <input type="text" wire:model="NombreUnidad" id="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="INSERTA LA UNIDAD" required>
                                <script>
                                    let input = document.getElementById('nombre');
                                    input.addEventListener('input', function() {
                                        this.value = this.value.replace(/[^a-zA-Z\s]/g, '');
                                    });
                                </script>
                                @error('NombreUnidad') 
                                    <h1 class="text-yellow-500 mt-4 text-center">
                                        {{ __('EL CAMPO ES REQUERIDO') }}
                                    </h1>
                                @enderror
                            </div>
                            <button wire:click="Guardar()" class="w-full text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">Registrar Unidad</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
