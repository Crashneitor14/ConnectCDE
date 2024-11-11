<x-layouts.app
    title="Registrar"
    meta-description="Registrar meta description"
>
<h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Registro</h1>

<form class="max-w-xl px-8 py-4 mx-auto bg-slate-300 rounded shadow"action="{{route('register')}}" method="POST">
    @csrf

    <div class="space-y-4">
        {{--Nombre--}}
        <label class="flex flex-col">
            <span class="flex justify-center font-serif text-slate-600">
                Nombre Estudiante
            </span>
            <input class="rounded-md shadow-sm border-slate-250 focus:ring-slate-300 focus:ring-opacity-50 focus:border-slate-300"
                name="name"
                type="text"
                value="{{ old('name')}}"
            >
            @error('name')
                <small class="font-bold text-red-500/80">{{$message}}</small>
            @enderror
        </label>
        {{--Carrera--}}
        <label class="flex flex-col">
            <div class="mx-auto">
                <label class="my-8" for="carrera">Carrera:</label>
                <select name="carrera" id="carrera" class="mx-auto">
                    <option value="IECI">IECI</option>
                    <option value="ICO">ICO</option>
                    <option value="ICINF">ICINF</option>
                    <option value="CPA">CPA</option>
                    <option value="DER">DER</option>
                </select>
            </div>
        </label>
        {{--Correo--}}
        <label class="flex flex-col">
            <span class="flex justify-center font-serif text-slate-600">
                Correo Institucional
            </span>
            <input class="rounded-md shadow-sm border-slate-250 focus:ring-slate-300 focus:ring-opacity-50 focus:border-slate-300"
                name="email"
                type="email"
                value="{{ old('email')}}"
            >

            @error('email')
                <small class="font-bold text-red-500/80">{{$message}}</small>
            @enderror

        </label>
        {{--Contraseña--}}
        <label class="flex flex-col">
            <span class="flex justify-center font-serif text-slate-600">
                Contraseña
            </span>
            <input class="rounded-md shadow-sm border-slate-250 focus:ring-slate-300 focus:ring-opacity-50 focus:border-slate-300"
                name="password"
                type="password"
                value="{{ old('password')}}"
            >

            @error('password')
                <small class="font-bold text-red-500/80">{{$message}}</small>
            @enderror

        </label>
        {{--Contraseña confirmar--}}
        <label class="flex flex-col">
            <span class="flex justify-center font-serif text-slate-600">
                Confirmar Contraseña
            </span>
            <input class="rounded-md shadow-sm border-slate-250 focus:ring-slate-300 focus:ring-opacity-50 focus:border-slate-300"
                name="password_confirmation"
                type="password"
                value="{{ old('password_confirmation')}}"
            >

            @error('password_confirmation')
                <small class="font-bold text-red-500/80">{{$message}}</small>
            @enderror

        </label>
    </div>


    <div class="flex items-center justify-between mt-4">
    <button class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border-2 border-transparent rounded-md bg-sky-800 hover:bg-sky-700 active:bg-sky-700 focus:outline-none focus:border-sky-500" type="submit">Registrar</button>
    <a class="text-sm font-semibold underline border-2 border-transparent rounded text-slate-600 focus:border-slate-500 focus:outline-none" href="{{route('register')}}">Volver a login</a>
    </div>
</form>

</x-layouts.app>


