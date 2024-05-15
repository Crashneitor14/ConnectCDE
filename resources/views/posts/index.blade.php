<x-layouts.app
    title="Publicacion"
    meta-description="Publicacion meta description"
>

    <h1>Publicacion</h1>
    <a href="{{route('posts.create')}}">Crear nueva publicacion</a>
   @foreach ($posts as $post)
   <div style="display: flex; align-items:baseline">
       <h2>
            <a href="{{route('posts.show' , $post)}}">
                {{ $post->title}}
            </a>
        </h2> &nbsp;
        <a href="{{route('posts.edit', $post)}}">Editar</a> &nbsp;

        <form action="{{ route('posts.destroy', $post) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>

    </div>
   @endforeach

</x-layouts.app>




