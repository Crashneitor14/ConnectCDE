<div class="space-y-4">
<label class="flex flex-col">
    <span class="flex justify-center font-serif text-slate-600">Titulo</span>
    <input class="rounded-md shadow-sm border-slate-250 focus:ring-slate-300 focus:ring-opacity-50 focus:border-slate-300" name="title" type="text" value="{{ old('title', $post->title)}}">

    @error('title')
        <small class="font-bold text-red-500/80">{{$message}}</small>
    @enderror

</label>
<label class="flex flex-col">
    <span class="flex justify-center font-serif text-slate-600">Cuerpo Publicacion</span>
    <input class="shadow-sm border-slate-250 focus:ring-slate-300 focus:ring-opacity-50 focus:border-slate-300" name="body" rows="3" value="{{old('body',$post->body)}}">
    </input>

    @error('body')
    <small class="font-bold text-red-500/80">{{$message}}</small>
    @enderror

</label>

<label class="flex flex-col ">
    <span class="flex justify-center font-serif text-slate-600">Imagen</span>
    <img src="{{ asset($post->imagen) }}" class="mx-auto" width="300 px">
    <input class="mx-auto" type="file" name="imagen" accept="image/*">

    @error('imagen')
    <small class="font-bold text-red-500/80">{{$message}}</small>
    @enderror

</label>
<label class="flex flex-col">
    <div class="mx-auto">
        <label class="my-8" for="expiracion">Fecha Termino:</label>
        <input type="datetime-local" name="expiracion" id="expiracion" value="{{ old('expiracion') }}">
    </div>
</label>
<label class="flex flex-col">
    <span class="flex justify-center font-serif text-slate-600">Detalles Publicacion</span>
    <textarea class="rounded-md shadow-sm border-slate-250 focus:ring-slate-300 focus:ring-opacity-50 focus:border-slate-300" name="details" rows="3">{{old('details',$post->details)}}</textarea>

    @error('details') {{--detector de errores--}}
    <small class="font-bold text-red-500/80">{{$message}}</small>
    @enderror

</label>

</div>

