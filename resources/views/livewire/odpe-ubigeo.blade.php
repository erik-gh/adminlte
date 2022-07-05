<div>
{{--    <form wire:submit.prevent="submit()" class="flex flex-col space-y-4">--}}
{{--        @csrf--}}
        <div class="col-md-6 sm:col-span-3" wire:ignore>
            <label for="sodpe" class="block text-sm font-medium text-gray-700">Odpe</label>
            <select id="sodpe" name="sodpe" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm
            focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" wire:model="odpe">
                <option value="" selected>-- Seleccione un Odpe --</option>
                @foreach($odpes as $odpe)
                    <option value="{{$odpe->id}}">{{$odpe->nombre_odpe}}</option>
                @endforeach
            </select>
        </div>
    @if($odpe)
        <div class="col-span-6 sm:col-span-3 mt-3">
            <label for="sdepartamento" class="block text-sm font-medium text-gray-700">Departamento</label>
            <select id="sdepartamento" name="sdepartamento" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm
            focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" wire:model="departamento">
                <option value="1" selected>-- Seleccione una Departamento --</option>
                @foreach($departamentos as $departamento)
                    <option value="{{$departamento->id}}">{{$departamento->descripcion}}</option>
                @endforeach
            </select>
        </div>
    @endif
    @if($departamento)
        <div class="col-span-6 sm:col-span-3 mt-3">
            <label for="sprovincia" class="block text-sm font-medium text-gray-700">Provincia</label>
            <svg wire:target="selectedState" wire:loading class="animate-spin ml-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            <select id="sprovincia" name="sprovincia" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm
            focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" wire:model="provincia">
                <option value="1" selected>-- Seleccione una Provincia --</option>
                @foreach($provincias as $provincia)
                    <option value="{{$provincia->id}}">{{$provincia->descripcion}}</option>
                @endforeach
            </select>
        </div>
    @endif
{{--    </form>--}}
</div>
{{--<script>
    document.addEventListener('DOMContentLoaded', function() {
        $("#sodpe").select2();
        console.log('Revisando');
        $('#sodpe').on('change', function(e) {
            var odpeId = $('#sodpe').select2("val");
            @this.set('odpe', odpeId);
        });
    });
</script>--}}
