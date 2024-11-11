<x-layouts.app  {{--Ver actividad --}}
    :title="$activity->name"
    :meta-description="$activity->name"
>
<div class="max-w-xl w-50 space-y-4 bg-grey rounded shadow bg-slate-280 m-auto grid w-full gap-8  sm:grid-cols-1 md:grid-cols-1max-w-xl px-8 py-4 mx-auto bg-slate-300">
    <label class="flex flex-col">
        <span class="flex justify-center font-serif text-slate-600">Nombre Actividad</span>
        <input class="rounded-md shadow-sm border-slate-250 focus:ring-slate-300 focus:ring-opacity-50 focus:border-slate-300" name="name" type="text" value="{{ old('name', $activity->name) }}">

        @error('title')
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
    {{--Rendiciones ver con script y base de datos aparte--}}
    {{--<label class="flex flex-col">
        <span class="flex justify-center font-serif text-slate-600">Rendiciones</span>

            <div id="gastos-container">
                <div class="input-group mb-2">
                    <input type="number" name="gastos[0][monto]" class="form-control gasto-input" placeholder="Monto del gasto">
                    <select name="gastos[0][tipo_financiamiento]" class="form-control">
                        <option value="interno">Interno</option>
                        <option value="externo">Facultad</option>
                        <option value="externo">DDE</option>
                    </select>
                </div>
            </div>


        @error('body')
        <small class="font-bold text-red-500/80">{{$message}}</small>
        @enderror

    </label>--}}

    <label class="flex flex-col ">
        <span class="flex justify-center font-serif text-slate-600">Documento</span>
        <input class="mx-auto" type="file" name="imagen" accept="image/*">

        @error('imagen')
        <small class="font-bold text-red-500/80">{{$message}}</small>
        @enderror

    </label>
    <label class="flex flex-col">
        <div class="mx-auto">
            <label class="my-8" for="date_start">Fecha Inicio:</label>
            <input type="date" name="date_start" value="{{--old('date_start', $activity->date_start)--}}">
        </div>

    </label>
    <label class="flex flex-col">
        <div class="mx-auto">
            <label class="my-8" for="date_end">Fecha Termino:</label>
            <input type="date" name="date_end" value="{{--old('date_end')--}}">
        </div>
    </label>
    <label class="flex flex-col">
        <span class="flex justify-center font-serif text-slate-600">Observaciones</span>
        <textarea class="rounded-md shadow-sm border-slate-250 focus:ring-slate-300 focus:ring-opacity-50 focus:border-slate-300" name="observation" rows="3">{{ old('observation',$activity->observation) }}</textarea>

        @error('observation') {{--detector de errores--}}
        <small class="font-bold text-red-500/80">{{$message}}</small>
        @enderror

    </label>
    <div class="flex justify-content: flex-end">
        <a class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800"
        href="{{route('act.index')}}">Volver a Actividades</a>
    </div>

</div>



</x-layouts.app>
