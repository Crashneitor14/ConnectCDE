<x-layouts.app  {{--post details(?) --}}
    :title="$post->title"
    :meta-description="$post->body"
>
    <h1 class="my-4 font-serif text-3xl text-center text-sky-600">{{ $post->title }}</h1>

    <div class=" bg-white w-5 py-2 space-y-4 bg-grey rounded shadow bg-slate-2 m-auto grid gap-8 px-96 max-w-7xl">
        <p class="mx-auto flex-1 leading-normal text-slate-600 ">{{ $post->details }}</p>
        <p>
            <img src="{{ asset($post->imagen) }}" class="img-fluid img-thumbnail" width="500 px">

        </p>




        <div class="flex justify-between ">
        <p>Creado por {{$post->name_user}}</p>
        <a class="mx-auto text-sm font-semibold underline border-2 border-transparent rounded  text-slate-600 focus:border-slate-500 focus:outline-none"
        href="{{route('posts.index')}}">Volver a Publicaciones</a>
        </div>
    </div>

</x-layouts.app>
