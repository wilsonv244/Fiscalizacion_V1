

    
    <div class="py-12">
        <h1 class="text-gray-900" style="text-align: center">Fiscalizacion de Puno con Laravel 8</h1>
        <div class="mx-auto max-w-7x1 sm:px-6 lg:px-8">
            <div class="px-4 py-4 overflow-hidden bg-white shadow-x1 sm:rounded-lg">

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
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


