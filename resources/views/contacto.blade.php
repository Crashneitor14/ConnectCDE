<x-layouts.app
    title="Contacto"
    meta-description="Contact meta description"
>
<h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Representantes CEE</h1>


<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl text-center font-bold mb-4"></h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach ($cees as $estudiante)
                <div class="bg-white rounded-lg shadow-md p-4 flex items-center">


                        <img src="{{ asset('images/CEE/' . $estudiante->id . '.png') }}" alt="" class="w-16 h-16 rounded-full mr-4">

                    <div>
                        <h2 class="text-lg font-semibold">{{$estudiante->name}}</h2>
                        <p class="text-gray-600">{{$estudiante->charge}}</p>
                        <p class="text-gray-600">{{$estudiante->email}}</p>
                    </div>

                </div>
                @endforeach
        </div>
    </div>
</body>



</x-layouts.app>


