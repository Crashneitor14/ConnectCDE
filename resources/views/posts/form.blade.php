<label>
    titulo<br>
    <input name="title" type="text" value="{{ old('title', $post->title)}}">
    @error('title')
        <br>
        <small style="color:red">{{$message}}</small>
    @enderror
</label><br>
<label>
    cuerpo de la publicacion <br>
    <textarea name="body" cols="30" rows="10">{{old('body',$post->body)}}</textarea>
    @error('body')
    <br>
    <small style="color:red">{{$message}}</small>
    @enderror


</label><br>

<label>
    detalles del cuerpo <br>
    <textarea name="details" cols="30" rows="10">{{old('details',$post->details)}}</textarea>
    @error('details')
    <br>
    <small style="color:red">{{$message}}</small>
    @enderror

</label><br>


