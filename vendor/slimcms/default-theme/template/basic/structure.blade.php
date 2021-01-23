<!doctype html>
<html lang="{{ container(\SlimCms\Client\ClientInfoInterface::class)->getLang() ?? 'en' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.5.55/css/materialdesignicons.min.css">
</head>
<body>
    <div style="display: flex; flex-direction: column; min-height: 100vh;">
        <div>
            @include('basic/header')
        </div>

        <div style="flex: 1">
            @if(isset($content))
                {{ $content }}
            @endif

            @yield('content')
        </div>

        <div>
            @include('basic/footer')
        </div>
    </div>
</body>
</html>
