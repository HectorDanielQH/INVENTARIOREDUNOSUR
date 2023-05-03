<div>
    <x-slot name="header">
        <div class="flex justify-around">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ __('Sucursales') }}
            </h2>
        </div>
    </x-slot>
    <div class="container mx-auto px-4 flex flex-wrap justify-center items-stretch ">
        @if($modal)
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                <div class="fixed z-10 inset-0 overflow-y-auto">
                    <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0">
                        <form class="relative bg-orange-500 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-lg sm:w-full" wire:submit.prevent="store()">
                            <div class="bg-orange-500 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                <div class="sm:flex sm:items-start">
                                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-gray-800 sm:mx-0 sm:h-10 sm:w-10">
                                        <!-- Heroicon name: outline/exclamation -->
                                        <svg class="h-6 w-6 text-gray-100" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                        </svg>
                                    </div>
                                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg leading-6 font-medium text-white" id="modal-title">AGREGAR NUEVA SUCURSAL</h3>
                                        <div class="mt-2">
                                            <p class="text-sm text-white">Solo selecciona el departamento y nosotros hacemos el resto </p>
                                        </div>
                                        <label for="countries" class="block mb-2 text-sm font-medium text-white ">Selecciona un deppartamento</label>
                                        <select id="countries" wire:model="departamento" name="departamento" class="bg-orange-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option selected>SELECCIONE UN DEPARTAMENTO</option>
                                                @foreach($departamentos_values as $departamento_value)
                                                    <option value="{{$departamento_value}}">{{$departamento_value}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-orange-400 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-md px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-800 sm:ml-3 sm:w-auto sm:text-sm transition-transform transform hover:scale-110 hover:shadow-lg hover:text-white">
                                    Guardar
                                </button>
                                <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-md px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-800 sm:ml-3 sm:w-auto sm:text-sm transition-transform transform hover:scale-110 hover:shadow-lg hover:text-white" wire:click="closeModal">
                                    Cancelar
                                </button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        @endif

            @role('administrador')
                <div class="flex items-stretch bg-orange-500 hover:bg-orange-600 rounded-full my-4">
                    <button wire:click="showModal()" class="p-4 m-2 text-white">
                        <h1 class="text-2xl">
                            {{ __('+') }} 
                        </h1>
                        {{__('Agregar Sucursal')}}
                    </button>
                </div>
            @endrole
            @foreach($valor as $sucursal)
                @if(Auth::user()->hasRole('administrador'))
                    <div class="max-w-sm rounded-lg overflow-hidden shadow-lg m-4 bg-orange-500 text-white">
                        @if($sucursal->Departamento =='POTOSI')
                                <img class="w-full transform hover:scale-105 transition duration-300" src={{asset('images/POTOSI.jpg')}} alt="potosi">
                        @endif
                        @if($sucursal->Departamento =='SANTA CRUZ')
                                <img class="w-full transform hover:scale-105 transition duration-300" src="https://www.eabolivia.com/images/stories/imagenes/bandera-de-santacruz.jpg" alt="">
                        @endif
                        @if($sucursal->Departamento =='CHUQUISACA')
                                <img class="w-full transform hover:scale-105 transition duration-300" src={{asset('images/CHUQUISACA.jpg')}} alt="SUCRE">
                        @endif
                        @if($sucursal->Departamento =='ORURO')
                                <img class="w-full transform hover:scale-105 transition duration-300" src={{asset('images/ORURO.jpg')}} alt="ORURO">
                        @endif
                        @if($sucursal->Departamento =='TARIJA')
                                <img class="w-full transform hover:scale-105 transition duration-300" src={{asset('images/TARIJA.jpg')}} alt="TARIJA">
                        @endif
                        @if($sucursal->Departamento =='BENI')
                                <img class="w-full transform hover:scale-105 transition duration-300" src="https://www.eabolivia.com/images/stories/imagenes/bandera-de-beni.jpg" alt="">
                        @endif
                        @if($sucursal->Departamento =='PANDO')
                                <img class="w-full transform hover:scale-105 transition duration-300" src="https://www.eabolivia.com/images/stories/imagenes/bandera-de-pando.jpg" alt="">
                        @endif
                        @if($sucursal->Departamento =='COCHABAMBA')
                                <img class="w-full transform hover:scale-105 transition duration-300" src="https://www.eabolivia.com/images/stories/imagenes/bandera-de-cochabamba.jpg" alt="">
                        @endif
                        @if($sucursal->Departamento =='LA PAZ')
                                <img class="w-full transform hover:scale-105 transition duration-300" src="https://www.eabolivia.com/images/stories/imagenes/bandera-de-lapaz.jpg" alt="">
                        @endif
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl text-center mb-2">{{ __("SUCURSAL DEL DEPARTAMENTO DE :departamento", ["departamento" => $sucursal->Departamento]) }}</div>
                            <div class="flex justify-center">
                                <button class="inline-block bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full shadow-md mr-4 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110" wire:click="redireccion({{ $sucursal->id }})">
                                {{ __("INGRESAR") }}
                                </button>
                                @role('administrador')
                                    <button class="inline-block bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full shadow-md transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110" wire:click="destroy({{ $sucursal->id }})">
                                    {{ __("ELIMINAR") }}
                                    </button>
                                @endrole
                            </div>                              
                        </div>
                    </div>
                @else
                    @if($sucursal->id==Auth::user()->Empleados->departamento)
                        <div class="max-w-sm rounded bg-orange-500 overflow-hidden shadow-lg m-4 items-center justify-center">
                            @if($sucursal->Departamento =='POTOSI')
                                    <img class="w-full transform hover:scale-105 transition duration-300" src={{asset('images/POTOSI.jpg')}} alt="POTOSI">
                            @endif
                            @if($sucursal->Departamento =='SANTA CRUZ')
                                    <img class="w-full transform hover:scale-105 transition duration-300" src="https://www.eabolivia.com/images/stories/imagenes/bandera-de-santacruz.jpg" alt="">
                            @endif
                            @if($sucursal->Departamento =='CHUQUISACA')
                                    <img class="w-full transform hover:scale-105 transition duration-300" src={{asset('images/CHUQUISACA.jpg')}} alt="SUCRE">
                            @endif
                            @if($sucursal->Departamento =='ORURO')
                                    <img class="w-full transform hover:scale-105 transition duration-300" src={{asset('images/ORURO.jpg')}} alt="ORURO">
                            @endif
                            @if($sucursal->Departamento =='TARIJA')
                                    <img class="w-full transform hover:scale-105 transition duration-300" src={{asset('images/TARIJA.jpg')}} alt="TARIJA">
                            @endif
                            @if($sucursal->Departamento =='BENI')
                                    <img class="w-full transform hover:scale-105 transition duration-300" src="https://www.eabolivia.com/images/stories/imagenes/bandera-de-beni.jpg" alt="">
                            @endif
                            @if($sucursal->Departamento =='PANDO')
                                    <img class="w-full transform hover:scale-105 transition duration-300" src="https://www.eabolivia.com/images/stories/imagenes/bandera-de-pando.jpg" alt="">
                            @endif
                            @if($sucursal->Departamento =='COCHABAMBA')
                                    <img class="w-full transform hover:scale-105 transition duration-300" src="https://www.eabolivia.com/images/stories/imagenes/bandera-de-cochabamba.jpg" alt="">
                            @endif
                            @if($sucursal->Departamento =='LA PAZ')
                                    <img class="w-full transform hover:scale-105 transition duration-300" src="https://www.eabolivia.com/images/stories/imagenes/bandera-de-lapaz.jpg" alt="">
                            @endif
                            <div class="px-6 py-4 flex flex-col justify-center items-center">
                                <div class="font-bold text-xl text-white text-center mb-2">SUCURSAL DEL DEPARTAMENTO DE {{$sucursal->Departamento}}</div>
                                <div class="flex justify-center">
                                    <button class="inline-block bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full shadow-md mr-4 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110" wire:click="redireccion({{ $sucursal->id }})">
                                      {{ __("INGRESAR") }}
                                    </button>
                                    @role('administrador')
                                        <button class="inline-block bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full shadow-md transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110" wire:click="destroy({{ $sucursal->id }})">
                                        {{ __("ELIMINAR") }}
                                        </button>
                                    @endrole
                                </div>                                  
                            </div>
                        </div>
                    @endif
                @endrole
            @endforeach
        
    </div>
</div>
