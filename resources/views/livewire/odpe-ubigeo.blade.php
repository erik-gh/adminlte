<div>
    <div class="col-md-6 sm:col-span-3">
        <label for="odpe" class="block text-sm font-medium text-gray-700">Odpe</label>
        <select id="odpe" name="odpe" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" wire:model="odpe">
            <option>-- Seleccione un Odpe --</option>
            @foreach($odpes as $odpe)
                <option value="{{$odpe->id}}">{{$odpe->nombre_odpe}}</option>
            @endforeach
        </select>
    </div>

    <div class="col-span-6 sm:col-span-3 mt-3">
        <label for="ubigeo" class="block text-sm font-medium text-gray-700">Ubigeo</label>
        <select id="ubigeo" name="ubigeo" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" wire:model="ubigeo">
            @if($ubigeos->count()==0)
                <option>-- Seleccione una Odpe --</option>
            @endif
            @foreach($ubigeos as $ubigeo)
                <option value="{{$ubigeo->id}}">{{$ubigeo->departamento_ubigeo}}</option>
            @endforeach
        </select>
    </div>
</div>
