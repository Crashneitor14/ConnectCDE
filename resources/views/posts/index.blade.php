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
<main class="m-auto grid w-full gap-8 px-96 max-w-7xl">

        @foreach ($posts as $post)

            <div class=" bg-white w-50 space-y-4 bg-grey rounded shadow bg-slate-280 px-4 py-3">
                {{--Titulo del post--}}
                <h2 class="flex justify-center text-xl">
                        {{ $post->title}}
                        </a>
                    </h2>



                    {{--imagen del post--}}
                    <a href="{{route('posts.show' , $post)}}">
                    <img src="{{ asset($post->imagen) }}" class="img-fluid img-thumbnail" width="500 px">
                    </a>


                    {{--Cuerpo del post--}}
                    <div>
                        {{$post->body}}
                    </div>
                    {{--Datos del autor y tiempo del post --}}
                    <div>
                        Creado por {{$post->name_user}} {{$post->created_at->diffForHumans()}}
                    </div>


                    {{--Edicion del post (solo administrador)--}}
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





                <div>
                    @if (Auth::user()->PostLike($post))
                        <form action="{{ route('posts.like',$post->id) }}" method="POST">
                        @csrf
                        <button type="submit">
                            <img src="images/megusta2.png" alt="imagen like" width="64"> Likes: {{ $post->likes()->count() }}
                        </button>
                        </form>

                    @else
                        <form action="{{ route('posts.dislike',$post->id) }}" method="POST">
                        @csrf
                        <button type="submit">
                            <img src="images/megusta.png" alt="imagen dislike" width="25">Likes: {{ $post->likes()->count() }}
                        </button>
                        </form>
                    @endif


                </div>

                @endauth
            </div>

        @endforeach


    </main>

</x-layouts.app>







