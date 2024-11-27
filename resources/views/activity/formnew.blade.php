<div class="space-y-4">
    <label class="flex flex-col">
        <span class="flex justify-center font-serif text-slate-600">Nombre Actividad</span>
        <input class="rounded-md shadow-sm border-slate-250 focus:ring-slate-300 focus:ring-opacity-50 focus:border-slate-300" name="name" type="text">

        @error('title')
            <small class="font-bold text-red-500/80">{{$message}}</small>
        @enderror
    </label>
    {{--seccion estado--}}
    <div class="mx-auto">
        <label class="my-8" for="status">Estado:</label>
        <select name="status" id="status" class="mx-auto">
            <option value="En Proceso">En proceso</option>
            <option value="Terminado">Terminado</option>
        </select>
    </div>
    <span class="flex justify-center font-serif text-slate-600">Rendiciones</span>
    {{--seccion rendicion--}}
    <label class="flex flex-col">
        <div class="flex items-center flex-1 sm:items-stretch sm:justify-start">
            <input class="rounded-md shadow-sm focus:ring-slate-300 focus:ring-opacity-50" name="name_rend" type="text" placeholder="Nombre Rendicion">
            <input type="number_format" name="monto" class="w-24 border border-gray-300 rounded px-3 py-2" placeholder="Monto total">
            <select name="tipo_rend" id="tipo_rend" class="mx-auto">
                <option value="DDE">DDE</option>
                <option value="Externo">Externo</option>
            </select>
        </div>
    </label>
    {{--imagen rendicion--}}
    <label class="flex flex-col">
        <span class="flex justify-center font-serif text-slate-600">Documento Rendicion</span>
        <input class="mx-auto" type="file" name="imagen" accept="image/*">

        @error('imagen')
        <small class="font-bold text-red-500/80">{{$message}}</small>
        @enderror

    </label>
    <label class="flex flex-col">
        <div class="mx-auto">
            <label class="my-8" for="date_start">Fecha Inicio:</label>
            <input type="date" name="date_start">
        </div>

    </label>
    <label class="flex flex-col">
        <div class="mx-auto">
            <label class="my-8" for="date_end">Fecha Termino:</label>
            <input type="date" name="date_end">
        </div>
    </label>
    <label class="flex flex-col">
        <span class="flex justify-center font-serif text-slate-600">Observaciones</span>
        <textarea class="rounded-md shadow-sm border-slate-250 focus:ring-slate-300 focus:ring-opacity-50 focus:border-slate-300" name="observation" rows="3"></textarea>

        @error('observation') {{--detector de errores--}}
        <small class="font-bold text-red-500/80">{{$message}}</small>
        @enderror

    </label>


</div>
