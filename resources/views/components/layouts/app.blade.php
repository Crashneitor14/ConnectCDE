<!DOCTYPE html>
<html lang="en"> {{-- zona trabajo index--}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--<meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
    <title>ConnectCDE - {{ $title ?? '' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Default meta-description'}}"/>
    <link rel="stylesheet" href="/css/app.scss">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="/js/app.js"></script>
    @vite(['resources/css/app.scss','resources/js/app.js'])
</head>

<body class="antialiased  bg-slate-350 bg-gray-200">

    <x-layouts.nav />

    @if(session('status'))
        <div class="max-w-screen-xl px-3 py-2 mx-auto font-bold text-white sm:px-6 lg:px-8 bg-emerald-500 dark:bg-emerald-700">
        {{session('status')}}
        </div>
    @endif

        {{ $slot }}


</body>

</html>
