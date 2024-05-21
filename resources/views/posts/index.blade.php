<x-layouts.app
    title="Publicacion"
    meta-description="Publicacion meta description"
>
<header class="px-6 py-4 space-y-2 text-center">
    <h1 class="font-serif text-3xl text-sky-600 dark:text-sky-500">Publicacion</h1>
    <a class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800"
        href="{{route('posts.create')}}">Crear nueva publicacion</a>
</header>

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




