<div>
    {{-- Stop trying to control. --}}

    <table class="w-full table-fixed">
        <thead>
            <tr class="text-white bg-indigo-400">
                <th class="px-4 py-2">Id</th>
                <th class="px-4 py-2">DNI</th>
                <th class="px-4 py-2">NOMBRES COMPLETOS</th>
                <th class="px-4 py-2">DIRECCIONES</th>
            </tr>            
        </thead>
        <tbody>
        @foreach ($personas as $persona)
            <tr>
                <td class="px-4 py-2 border">{{$persona->id}}</td>
                <td class="px-4 py-2 border">{{$persona->dni}}</td>
                <td class="px-4 py-2 border">{{$persona->namecomplet}}</td>
                <td class="px-4 py-2 border">{{$persona->direcreal}}</td>
            </tr>
        @endforeach            
        </tbody>
    </table>
</div>
