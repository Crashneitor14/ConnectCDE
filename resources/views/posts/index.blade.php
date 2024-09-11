<x-layouts.app
    title="Publicacion"
    meta-description="Publicacion meta description"
>
<header class="px-6 py-4 space-y-2 text-center">
    <h1 class="font-serif text-3xl text-sky-600 dark:text-sky-500">Publicacion</h1>
    @auth
    <a class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800"
        href="{{route('posts.create')}}">Crear nueva publicacion</a>
        <a class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800"
        href="{{ route('test') }}">Probar Publicacion</a>
    @endauth
</header>
<main class="m-auto grid w-full gap-8 px-96 max-w-7xl sm:grid-cols-1 md:grid-cols-1">

@foreach ($posts as $post)

    <div class=" bg-white w-50 px-4 py-2 space-y-4 bg-grey rounded shadow bg-slate-280">


            <h2 class="flex justify-center text-xl">
                {{--<a href="{{route('posts.show' , $post)}}" class="flex justify-center">--}}
                {{ $post->title}}
                </a>
            </h2>




            <a href="{{route('posts.show' , $post)}}">
            <img src="{{ asset($post->imagen) }}" class="img-fluid img-thumbnail" width="500 px">
            </a>



            <div>
                {{$post->body}}
            </div>
        @auth
        <div class="flex justify-between ">
            <a class="inline-flex items-center font-semibold tracking-widest text-center uppercase transition duration-150 ease-in-out  text-slate-600 hover:text-slate-600 dark:hover:text-slate-600 focus:outline-none focus:border-slate-200"
                href="{{route('posts.edit', $post)}}">Editar
            </a>
            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                @csrf
                @method('DELETE')
            <button class="inline-flex items-center text-xs font-semibold tracking-widest text-center
            text-red-500 uppercase transition duration-150 ease-in-out
            dark:text-red-500/80 hover:text-red-600 focus:outline-none" type="submit">Eliminar</button>
            </form>
        </div>
        @endauth
    </div>

@endforeach


    </main>
</x-layouts.app>




