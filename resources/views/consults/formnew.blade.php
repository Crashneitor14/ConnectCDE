<div class="space-y-4">
    <label class="flex flex-col">
        <span class="flex justify-center font-serif text-slate-600">Asunto</span>
        <input class="rounded-md shadow-sm border-slate-250 focus:ring-slate-300 focus:ring-opacity-50 focus:border-slate-300" name="name" type="text">

        @error('name')
            <small class="font-bold text-red-500/80">{{$message}}</small>
        @enderror
    </label>

    <label class="flex flex-col">
        <span class="flex justify-center font-serif text-slate-600">Mensaje</span>
        <textarea class="rounded-md shadow-sm border-slate-250 focus:ring-slate-300 focus:ring-opacity-50 focus:border-slate-300" name="message" rows="3"></textarea>

        @error('message') {{--detector de errores--}}
        <small class="font-bold text-red-500/80">{{$message}}</small>
        @enderror
    </label>
</div>

