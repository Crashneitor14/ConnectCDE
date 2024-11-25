<div class="space-y-4">
    <label class="flex flex-col">
        <span class="flex justify-center font-serif text-slate-600">Titulo Votacion</span>
        <input class="rounded-md shadow-sm border-slate-250 focus:ring-slate-300 focus:ring-opacity-50 focus:border-slate-300" name="name" type="text" value="{{old('name',$vote->name)}}">

        @error('name')
            <small class="font-bold text-red-500/80">{{$message}}</small>
        @enderror
    </label>
    <label class="flex flex-col">
        <span class="flex justify-center font-serif text-slate-600">Detalles</span>
        <input class="rounded-md shadow-sm border-slate-250 focus:ring-slate-300 focus:ring-opacity-50 focus:border-slate-300" name="detalle" type="text" value="{{old('detalle',$vote->detalle)}}">

        @error('detalle')
            <small class="font-bold text-red-500/80">{{$message}}</small>
        @enderror
    </label>
    {{--Votos revisar cuadro texto--}}
    <label class="flex flex-col">
        <span class="flex justify-center font-serif text-slate-600">Total Votos</span>
        <input type="integer" value="{{old('total',$vote->total)}}" name="total" class="w-24 border border-gray-300 rounded px-3 py-2"/>
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
        <textarea class="rounded-md shadow-sm border-slate-250 focus:ring-slate-300 focus:ring-opacity-50 focus:border-slate-300" name="observation" rows="3">{{ old('observation',$vote->observation) }}</textarea>

        @error('observation') {{--detector de errores--}}
        <small class="font-bold text-red-500/80">{{$message}}</small>
        @enderror
    </label>


</div>
