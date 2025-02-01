<x-layouts.app
    title="Crear Consulta"
    meta-description="Formulario para enviar consultas al CEE"
>
    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Crear consulta</h1>

    <form class="max-w-xl px-8 py-4 mx-auto bg-slate-300 rounded shadow" action="{{--route('vot.store')--}}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('consults.formnew')

        <div class="flex items-center justify-between mt-4">
        <button class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border-2 border-transparent rounded-md bg-sky-800 hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:border-sky-500" type="submit">Enviar</button>
        <a class="text-sm font-semibold underline border-2 border-transparent rounded text-slate-600 focus:border-slate-500 focus:outline-none" href="{{route('cons.index')}}">Volver a listado</a>
        </div>
    </form>


</x-layouts.app>
