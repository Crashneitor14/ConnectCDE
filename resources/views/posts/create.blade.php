<x-layouts.app
    title="Crear Nueva publicacion"
    meta-description="Formulario para crear una publicacion"
>
    <h1>Crear nueva  publicacion</h1>

    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        @include('posts.form')
        <button type="submit">Enviar</button>
        <br>
    </form>
    <br>

    <a href="{{route('posts.index')}}">Volver a listado</a>


</x-layouts.app>
