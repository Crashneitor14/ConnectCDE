<x-layouts.app
    title="Editar Actividad"
    meta-description="Formulario para editar Actividades"
>
    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Editar Actividad</h1>

    <form class="max-w-xl px-8 py-4 mx-auto bg-slate-300 rounded shadow" action="{{route('act.update',$activity)}}" method="POST" enctype="multipart/form-data">
        @csrf @method('PATCH')
        @include('activity.form')

        <div class="flex items-center justify-between mt-4">

            <a class="text-sm font-semibold underline border-2 border-transparent rounded text-slate-600 focus:border-slate-500 focus:outline-none" href="{{route('act.index')}}">Volver a Actividades</a>
            @auth
            <button class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border-2 border-transparent rounded-md bg-sky-800 hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:border-sky-500" type="submit">Editar</button>
            @endauth
        </div>
    </form>


</x-layouts.app>
