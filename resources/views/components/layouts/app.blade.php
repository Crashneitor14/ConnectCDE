<!DOCTYPE html>
<html lang="en"> {{-- zona trabajo index--}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--<meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
    <title>ConnectCDE - {{ $title ?? '' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Default meta-description'}}"/>
    <link rel="stylesheet" href="css/app.scss">
    <script src="js/app.js"></script>
    @vite(['resources/css/app.scss','resources/js/app.js'])
</head>
<body>

    <x-layouts.nav />
    @if(session('status'))
    <div> {{session('status')}} </div>
    @endif

{{ $slot }}


</body>
</html>
