<div class="fixed inset-0 z-10 overflow-y-auto duration-300 ease-out">
    <div class="flex justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>        

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>    
            <div class="inline-block overflow-hidden align-bottom transition-all transform bg-white rounded-lg shadow-xl text-lef sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <form>
                    <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">

                        <div class="flex-row w-full text-xs md:flex md:space-x-4">
							<div class="w-full mb-3 space-y-2 text-xs">
								<label class="py-2 font-semibold text-gray-600">Estado <abbr title="required">*</abbr></label>
								<input placeholder="Company Name" class="block w-full h-10 px-4 border rounded-lg appearance-none bg-grey-lighter text-grey-darker border-grey-lighter" required="required" type="text" name="integration[shop_name]" id="estado" wire:model="estado">
								<p class="hidden text-xs text-red">En que estado se encuentra</p>
							</div>
							<div class="w-full mb-3 space-y-2 text-xs">
								<label class="py-2 font-semibold text-gray-600">Fecha intervencion <abbr title="required">*</abbr></label>
								<input type="date" placeholder="Email ID" class="block w-full h-10 px-4 border rounded-lg appearance-none bg-grey-lighter text-grey-darker border-grey-lighter" required="required"  name="integration[shop_name]" id="fecha" wire:model="fecha">
								{{-- <p class="hidden text-xs text-red">Please fill out this field.</p> --}}
							</div>
						</div>

                        <div class="mb-4">
                            <label for="nombreEstablecimiento" class="block mb-2 text-sm font-bold text-gray-700" style="text-align: left">Nombre de nombreEstablecimiento</label>
                            <input placeholder="Digite el nombre el establecimiento" type="text" class="w-full px-3 leading-tight text-gray-700 border rounded shadow appearance-none py-z focus:shadow-outline" id="nombreEstablecimiento" wire:model="nombreEstablecimiento">
                            {{-- <p class="hidden text-xs text-red">Digite el nombre el establecimiento</p> --}}

                        </div>
                        <div class="mb-4">
                            <label for="direccion" class="block mb-2 text-sm font-bold text-gray-700" style="text-align: left">Direccion</label>
                            <input placeholder="digite la Direccion" type="text" class="w-full px-3 leading-tight text-gray-700 border rounded shadow appearance-none py-z focus:shadow-outline" id="direccion" wire:model="direccion">
                            <p class="hidden text-xs text-red">Digite la direccion</p>

                        </div>
                        <div class="mb-4">
                            <label for="actaComiso" class="block mb-2 text-sm font-bold text-gray-700" style="text-align: left">Acta Comiso</label>
                            <input placeholder="digite el acta de comiso" type="text" class="w-full px-3 leading-tight text-gray-700 border rounded shadow appearance-none py-z focus:shadow-outline" id="actaComiso" wire:model="actaComiso">

                        </div>
                        <div class="mb-4">
                            <label for="informeF" class="block mb-2 text-sm font-bold text-gray-700" style="text-align: left">Informe Fiscalizacion</label>
                            <input placeholder="digite el informe de Fiscalizacion" type="text" class="w-full px-3 leading-tight text-gray-700 border rounded shadow appearance-none py-z focus:shadow-outline" id="informeF" wire:model="informeF">

                        </div>
                        <div class="mb-4">
                            <label for="fechaFisc" class="block mb-2 text-sm font-bold text-gray-700" style="text-align: left">Fecha de Fiscalizacion</label>
                            <input type="date" placeholder="digite la fecha de fiscalizacino" type="text" class="w-full px-3 leading-tight text-gray-700 border rounded shadow appearance-none py-z focus:shadow-outline" id="fechaFisc" wire:model="fechaFisc">

                        </div>
                        <div class="mb-4">
                            <label for="observacion" class="block mb-2 text-sm font-bold text-gray-700" style="text-align: left">observacion</label>
                            <input placeholder="digite la observacion si la hay" type="text" class="w-full px-3 leading-tight text-gray-700 border rounded shadow appearance-none py-z focus:shadow-outline" id="observacion" wire:model="observacion">

                        </div>
                
                        <div class="px-4 bg-gray-50 sm:px-6 sm:flex sm:flex-row-reverse">
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click.prevent = "guardar()" type= "button" class="px-5 py-3 text-sm font-medium tracking-wider text-gray-100 bg-gray-600 border rounded-full shadow-sm hover:shadow-lg hover:bg-gray-700">Guardar</button>
                            </span>
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click.prevent = "cerrarModal()" type= "button" class="px-5 py-3 text-sm font-medium tracking-wider text-gray-100 bg-gray-600 border rounded-full shadow-sm hover:shadow-lg hover:bg-gray-700">Cancelar</button>
                            </span>
                        </div> 
                    </div>
                </form>        
            </div>
    </div>

</div>