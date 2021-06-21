
<x-slot name="header">
    <h1 class="text-gray-900" style="text-align: left">Fiscalizacion de Puno con Laravel 8 PROBANDO</h1>
    <!-- component -->
    <div class="relative my-2 mr-6">
        <input wire:model="searchTerm" type="search" class="p-3 border-0 rounded shadow bg-purple-white" placeholder="Search by name...">
    </div>
</x-slot>
    
    <div class="py-12">
        <div class="mx-auto max-w-7x1 sm:px-6 lg:px-8">
            <div class="px-4 py-4 overflow-hidden bg-white shadow-x1 sm:rounded-lg">
                
                @if (session()->has('message'))
                    {{-- <div class="px-4 py-4 my-3 text-teal-900 bg-teal-100 rounded-b shadow-md" role="alert">
                        <div class="flex">
                            <div>
                                <h4>{{session('message')}}</h4>
                            </div>
                        </div>
                    </div>     --}}
                    <div class="px-4 py-3 text-teal-900 bg-teal-100 border-t-4 border-teal-500 rounded-b shadow-md" role="alert">
                        <div class="flex">
                          <div class="py-1"><svg class="w-6 h-6 mr-4 text-teal-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                          <div>
                            
                            {{-- <p class="text-sm">Make sure you know how these changes affect you.</p> --}}
                            <h4>{{session('message')}}</h4>

                          </div>
                        </div>
                      </div>

                @endif

                <button wire:click="crear()" class="px-4 py-2 my-3 font-bold text-white bg-green-500 hover:bg-green-600">Nuevo Registro</button>
                @if($modal)
                    @include('livewire.crear')
                @endif
                
                <table class="w-full table-fixed">
                    <thead>
                        <tr class="text-white bg-indigo-600">
                            {{-- estado','fecha','nombreEstablecimiento',
                            'direccion', 'actaComiso','informeF','fechaFisc','observacion --}}
                            <th class="px-4 py-2">id</th>
                            <th class="px-4 py-2">estado</th>
                            <th class="px-4 py-2">fecha</th>
                            <th class="px-4 py-2">nombreEstablecimiento</th>
                            <th class="px-4 py-2">direccion</th>
                            <th class="px-4 py-2">actaComiso</th>
                            <th class="px-4 py-2">informeF</th>
                            <th class="px-4 py-2">fechaFisc</th>
                            <th class="px-4 py-2">observacion</th>
                            <th class="px-4 py-2">ACCIONES</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($infracciones as $infraccion)
                    <tr> 
                        <td class="px-4 py-2 border">{{$infraccion->id}}</td>
                        <td class="px-4 py-2 border">{{$infraccion->estado}}</td>
                        <td class="px-4 py-2 border">{{$infraccion->fecha}}</td>
                        <td class="px-4 py-2 border">{{$infraccion->nombreEstablecimiento}}</td>
                        <td class="px-4 py-2 border">{{$infraccion->direccion}}</td>
                        <td class="px-4 py-2 border">{{$infraccion->actaComiso}}</td>
                        <td class="px-4 py-2 border">{{$infraccion->informeF}}</td>
                        <td class="px-4 py-2 border">{{$infraccion->fechaFisc}}</td>
                        <td class="px-4 py-2 border">{{$infraccion->observacion}}</td>
                        <td class="px-4 py-2 text-center border">
                            <button wire:click="editar({{$infraccion->id}})" class="px-4 py-2 font-bold text-white bg-blue-500 hover:bg-blue-600">Editar</button>
                            <button wire:click = "borrar({{$infraccion->id}})" class="px-4 py-2 font-bold text-white bg-red-400 hover:bg-red-700">Borrar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


