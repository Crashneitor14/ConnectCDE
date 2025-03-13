<div class="space-y-4">
    <label class="flex flex-col">
        <span class="flex justify-center font-serif text-slate-600">Nombre Actividad</span>
        <input class="rounded-md shadow-sm border-slate-250 focus:ring-slate-300 focus:ring-opacity-50 focus:border-slate-300" name="name" type="text" value="{{ old('name', $activity->name) }}">

        @error('name')
            <small class="font-bold text-red-500/80">{{$message}}</small>
        @enderror
    </label>
    {{--seccion estado--}}
    <label class="flex flex-col">
    <div class="mx-auto">
        <label class="my-8" for="status">Estado:</label>
        <select name="status" id="status" class="mx-auto" value="{{ old('status', $activity->status) }}">
            <option value="En Proceso">En proceso</option>
            <option value="Terminado">Terminado</option>
        </select>
    </div>
    </label>
    <label class="flex flex-col">
        <span class="flex justify-center font-serif text-slate-600">Nombre o item Rendicion</span>
        <input class="rounded-md shadow-sm border-slate-250 focus:ring-slate-300 focus:ring-opacity-50 focus:border-slate-300" name="name_rend" type="text" value="{{ old('name_rend', $activity->name_rend) }}">

        @error('name_rend')
            <small class="font-bold text-red-500/80">{{$message}}</small>
        @enderror
    </label>
    <label class="flex flex-col">
        <span class="flex justify-center font-serif text-slate-600">Monto Total Actividad</span>
        <input type="number_format" name="monto" class="mx-auto w-24 border border-gray-300 rounded px-3 py-2" value="{{ old('monto', $activity->monto) }}">
        @error('monto')
            <small class="font-bold text-red-500/80">{{$message}}</small>
        @enderror
    </label>

    <label class="flex flex-col">
        <div class="mx-auto">
            <span class="flex justify-center font-serif text-slate-600">Tipo Rendicion:</span>
                <p>{{$activity->tipo_rend}}</p>
        </div>
    </label>

    <label class="flex flex-col">
        <div class="mx-auto">
            <label class="my-8" for="date_start">Fecha Inicio:</label>
            <p>{{ $activity->date_start->format('d/m/Y') }}</p>
        </div>
    </label>

    <label class="flex flex-col">
        <div class="mx-auto">
            <label class="my-8" for="date_end">Fecha Termino:</label>
            <p>{{$activity->date_end->format('d/m/Y')}}</p>
        </div>
    </label>

    <label class="flex flex-col">
        <span class="flex justify-center font-serif text-slate-600">Observaciones</span>
        <textarea class="rounded-md shadow-sm border-slate-250 focus:ring-slate-300 focus:ring-opacity-50 focus:border-slate-300" name="observation" rows="3">{{ old('observation',$activity->observation) }}</textarea>

    </label>
</div>
