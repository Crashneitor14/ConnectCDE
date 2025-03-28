<x-layouts.app  {{--post details(?) --}}
    :title="$post->title"
    :meta-description="$post->body"
>
    <h1 class="my-4 font-serif text-3xl text-center text-sky-600">{{ $post->title }}</h1>

    <div class="bg-white max-w-xl px-8 py-4 mx-auto w-50 space-y-4 bg-grey rounded shadow bg-slate-280 m-auto grid w-full gap-8  sm:grid-cols-1 md:grid-cols-1">

        <p>
            <img src="{{ asset($post->imagen) }}" class="mx-auto img-fluid img-thumbnail" width="500 px">

        </p>
        <p class="mx-auto flex-2 leading-normal">{{ $post->details }}</p>



        <div class="flex justify-content: flex-end">
        <p>Creado por {{$post->name_user}}</p>
        <a class="mx-auto text-sm font-semibold underline border-2 border-transparent rounded  text-slate-600 focus:border-slate-500 "
        href="{{route('posts.index')}}">Volver a Publicaciones</a>
        </div>
    </div>

</x-layouts.app>
