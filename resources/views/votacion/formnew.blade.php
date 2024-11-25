<div class="space-y-4">
    <label class="flex flex-col">
        <span class="flex justify-center font-serif text-slate-600">Titulo Votacion</span>
        <input class="rounded-md shadow-sm border-slate-250 focus:ring-slate-300 focus:ring-opacity-50 focus:border-slate-300" name="name" type="text">

        @error('name')
            <small class="font-bold text-red-500/80">{{$message}}</small>
        @enderror
    </label>
    <label class="flex flex-col">
        <span class="flex justify-center font-serif text-slate-600">Detalles</span>
        <input class="rounded-md shadow-sm border-slate-250 focus:ring-slate-300 focus:ring-opacity-50 focus:border-slate-300" name="detalle" type="text">

        @error('detalle')
            <small class="font-bold text-red-500/80">{{$message}}</small>
        @enderror
    </label>
    {{--Votos revisar cuadro texto--}}
    <label class="flex flex-col">
        <span class="flex justify-center font-serif text-slate-600">Total Votos</span>
        <input type="number" name="total" class="bg-gray-50 border-x-0 border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
        @error('total')
            <small class="font-bold text-red-500/80">{{$message}}</small>
        @enderror
    </label>
    <label class="flex flex-col ">
        <span class="flex justify-center font-serif text-slate-600">Documento Votacion</span>
        <input class="mx-auto" type="file" name="imagen" accept="image/*">

        @error('imagen')
        <small class="font-bold text-red-500/80">{{$message}}</small>
        @enderror

    </label>
    <label class="flex flex-col">
        <span class="flex justify-center font-serif text-slate-600">Observacion</span>
        <textarea class="rounded-md shadow-sm border-slate-250 focus:ring-slate-300 focus:ring-opacity-50 focus:border-slate-300" name="observation" rows="3"></textarea>

        @error('observation') {{--detector de errores--}}
        <small class="font-bold text-red-500/80">{{$message}}</small>
        @enderror
    </label>


</div>
