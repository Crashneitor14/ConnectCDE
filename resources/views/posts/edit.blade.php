<x-layouts.app
    :title="$post->title"
    :meta-description="$post->body"
>   <h1>Modificar Publicacion</h1>

<form action="{{route('posts.update',$post)}}" method="POST">
    @csrf @method('PATCH')
    @include('posts.form')
    <button type="submit">Enviar</button>
    <br>
</form>
<br>
    <a href="{{route('posts.index')}}">Volver a listado</a>


</x-layouts.app>
