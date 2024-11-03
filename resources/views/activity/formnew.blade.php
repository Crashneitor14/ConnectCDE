<div class="space-y-4">
    <label class="flex flex-col">
        <span class="flex justify-center font-serif text-slate-600">Nombre Actividad</span>
        <input class="rounded-md shadow-sm border-slate-250 focus:ring-slate-300 focus:ring-opacity-50 focus:border-slate-300" name="name" type="text" value="{{--old('title', $post->title)--}}">

        @error('title')
            <small class="font-bold text-red-500/80">{{$message}}</small>
        @enderror
    </label>
    {{--seccion estado--}}
    <div class="mx-auto">
        <label class="my-8" for="status">Estado:</label>
        <select name="status" id="status" class="mx-auto">
            <option value="en proceso">En proceso</option>
            <option value="finalizado">Terminado</option>
        </select>
    </div>

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
            <input type="date" name="date_start" id="expiracion" value="{{--old('expiracion')--}}">
        </div>

    </label>
    <label class="flex flex-col">
        <div class="mx-auto">
            <label class="my-8" for="date_end">Fecha Termino:</label>
            <input type="date" name="date_end" id="expiracion" value="{{--old('expiracion')--}}">
        </div>
    </label>
    <label class="flex flex-col">
        <span class="flex justify-center font-serif text-slate-600">Observaciones</span>
        <textarea class="rounded-md shadow-sm border-slate-250 focus:ring-slate-300 focus:ring-opacity-50 focus:border-slate-300" name="observation" rows="3">{{--old('details',$post->details)--}}</textarea>

        @error('details') {{--detector de errores--}}
        <small class="font-bold text-red-500/80">{{$message}}</small>
        @enderror

    </label>

    </div>
