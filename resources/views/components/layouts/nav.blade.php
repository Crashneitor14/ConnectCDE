{{--<nav>
<ul>
    <li><a href="{{ route('menu')}}">Index</a></li>
    <li><a href="{{ route('plata')}}">finanza</a></li>
    <li><a href="{{ route('posts.index')}}">publicaciones</a></li>
    <li><a href="{{ route('contact')}}">contacto</a></li>
</ul>
</nav>
NAVEGADOR
--}}
<nav
    class="mx-auto w-screen bg-white border-b white:bg-slate-900 border-slate-900/10 lg:px-8 white:border-slate-300/10 lg:mx-0">
    <div class="px-4 mx-auto max-w-7xl sm:px-16 lg:px-20">
        <div class="relative flex items-center justify-between h-16">
            <div class="flex items-center flex-1 sm:items-stretch sm:justify-start">
                <div class="flex items-center flex-shrink-0">
                    <a href="{{ route('menu')}}">
                        <img class="flex items-center justify-center" src="{{ asset('images/face.png') }}" alt="Mi Imagen" width="130">
                    </a>
                </div>
                <div class="mx-auto">
                    <div class="flex space-x-4">
                        <a href="{{ route('menu')}}"
                            class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-dark {{ request()->routeIs('menu') ? 'text-sky-600 ' : 'text-slate-250'}}">
                            Home
                        </a>
                        <a href="{{ route('posts.index')}}"
                        class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-dark {{ request()->routeIs('posts.*') ? 'text-sky-600 ' : 'text-slate-250'}}">
                            Publicaciones
                        </a>
                    @auth
                        <a href="{{ route('act.index')}}"
                            class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-dark {{ request()->routeIs('activity.*') ? 'text-sky-600 ' : 'text-slate-250'}}">
                            Finanzas
                        </a>
                        <a href="{{ route('vot.index') }}"
                            class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-dark {{ request()->routeIs('votacion.*') ? 'text-sky-600 ' : 'text-slate-250'}}">
                            Votaciones
                        </a>
                        <a href="{{ route('cons.index')}}"
                            class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-dark {{ request()->routeIs('consult') ? 'text-sky-600 ' : 'text-slate-250'}}">
                            Consultas
                        </a>
                    @endauth
                        <a href="{{ route('contact')}}"
                            class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-dark {{ request()->routeIs('contact') ? 'text-sky-600 ' : 'text-slate-250'}}">
                            Contacto
                        </a>
                    </div>
                </div>

            </div>
                @guest {{--Mostrar index--}}
                    <div class="ml-auto">
                        <div class="flex space-x-4">
                            <a href="{{ route('login')}}"
                                class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-dark {{ request()->routeIs('login') ? 'text-sky-600 ' : 'text-slate-250'}}">
                                Iniciar Sesion
                        </a>
                        </div>
                    </div>
                    <div class="ml-auto">
                        <div class="flex space-x-4">
                            <a href="{{ route('register')}}"
                                class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-dark {{ request()->routeIs('register') ? 'text-sky-600 ' : 'text-slate-250'}}">
                                Registrarse
                        </a>
                        </div>
                    </div>
                @else {{--Mostrar acorde rol estudiante (modificar)--}}
                    <div class="flex flex-col space-x-4">
                        <a>{{ Auth::user()->name }}</a>
                        <a>Carrera: {{Auth::user()->carrera}}</a>
                    </div>
                    <div class="flex space-x-4">
                        <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button>Cerrar Sesion</button>
                        </form>
                    </div>
                @endguest

        </div>
    </div>
</nav>
