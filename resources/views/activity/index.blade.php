<x-layouts.app
    title="Finanza"
    meta-description="Finanza meta description"
>
<header class="px-6 py-4 space-y-2 text-center">
    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500"> Actividades - Rendiciones</h1>
    @auth
    <a class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800"
        href="{{route('act.create')}}">Iniciar nueva actividad</a>
    @endauth
</header>
<body>

<div class="flex justify-center mt-8">

        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                <table class="min-w-full">
                    <thead>
                        <tr class="bg-white">
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Nombre Actividad</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Estado</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Monto</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Fecha Inicio</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Fecha Fin</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Entidad</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Encargado</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Imagen</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"></th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"></th>

                        </tr>
                    </thead>
                    @foreach ($activities as $activities)
                        @if($activities->carrera_user === auth()->user()->carrera)
                        <tbody class="bg-white">
                        <tr>
                            {{--Nombre Actividad--}}
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="flex items-center">
                                    <div class="ml-4">
                                        {{$activities->name}}
                                    </div>
                                </div>
                            </td>
                            {{--Estado Actividad--}}
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="ml-4">
                                    {{$activities->status}}
                                </div>
                            </td>
                            {{--Monto Actividad--}}
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="ml-4">
                                    ${{$activities->monto}}
                                </div>
                            </td>
                            {{--Fecha inicio Actividad--}}
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <a>{{
                                    $activities->date_start->format('d-m-Y')
                                    }}</a>
                            </td>
                            {{--Fecha terminado Actividad--}}
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <a>{{
                                    $activities->date_end->format('d-m-Y')
                                    }}</a>
                            </td>
                            {{--Entidad Actividad--}}
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="ml-4">
                                    {{$activities->tipo_rend}}
                                </div>
                            </td>
                            {{--Estudiante a cargo--}}
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                {{$activities->user_charge}} - {{$activities->carrera_user}}
                            </td>
                            {{--Imagen Rendicion--}}
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                @if ($activities->imagen)
                                    <a href="{{ asset($activities->imagen) }} " target="_blank">Ver imagen</a>
                                @else
                                    <p>No hay Imagen</p>
                                @endif
                                </td>

                            {{--Ver/Editar Actividad--}}
                            <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                <a class="text-indigo-600 hover:text-indigo-900" href="{{ route('act.edit',$activities) }}">Editar/Ver Detalles</a>
                            </td>
                            {{--Eliminar Actividad--}}
                            <form action="{{route('act.destroy',$activities)}}" method="POST">
                                @csrf
                            @method('DELETE')
                            <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                <button class="text-red-600 hover:text-indigo-900">Eliminar</button>
                            </td>
                            </form>
                        </tr>
                    </tbody>
                    @endif
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>

</x-layouts.app>





