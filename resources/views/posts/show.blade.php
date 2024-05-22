<x-layouts.app  {{--post details(?) --}}
    :title="$post->title"
    :meta-description="$post->body"
>
    <h1 class="my-4 font-serif text-3xl text-center text-sky-600">{{ $post->title }}</h1>

    <div class="flex flex-col max-w-xl px-8 py-4 mx-auto bg-white rounded shadow h-96 ">
        <p class="flex-1 leading-normal text-slate-600 ">{{ $post->details }}</p>
        <a class="mr-auto text-sm font-semibold underline border-2 border-transparent rounded  text-slate-600 focus:border-slate-500 focus:outline-none"
        href="{{route('posts.index')}}">Volver a listado</a>
    </div>








</x-layouts.app>
