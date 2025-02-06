<x-layouts.app
    title="Contacto"
    meta-description="Contact meta description"
>
<h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Consultas CEE</h1>
<header class="px-6 py-4 space-y-2 text-center" {{--Especificar solo para estudiantes--}}>
    @auth
    <a class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800"
        href="{{route('cons.create')}}">Generar una consulta</a>
    @endauth
</header>
<div class="flex justify-center mt-8">

    <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
            <table class="min-w-full">
                <thead>
                    <tr class="bg-white">
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Asunto</th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Estado Revision</th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Correo Estudiante</th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Fecha Enviado</th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"></th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider"></th>
                    </tr>
                </thead>
                @foreach ($consult as $consult)
                            <tbody class="bg-white">
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                {{$consult->name}}
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        {{$consult->status}}
                                    </td>


                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200 text-sm leading-5 text-gray-500">
                                        {{$consult->Correo_est}}

                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        {{$consult->created_at->format('d-m-Y')}}
                                    </td>

                                    <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                        <a class="text-indigo-600 hover:text-indigo-900">Ver Detalles</a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                        <a class="text-red-600 hover:text-indigo-900">Eliminar</a>
                                    </td>
                                </tr>
                            </tbody>

                @endforeach


            </table>
        </div>
    </div>
</div>



</x-layouts.app>


