<!doctype html>
<html lang="{{ container(\SlimCms\Client\ClientInfoInterface::class)->getLang() ?? 'en' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.5.55/css/materialdesignicons.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ storage('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ storage('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ storage('favicon-16x16.png') }}">
</head>
<body class="bg-light">
<div style="display: flex; flex-direction: column; min-height: 100vh;">
    <div>
        @include('admin/header')
    </div>

    <div style="flex: 1">
        <div class="container-fluid" style="height: calc(100vh - 112px);">
            <div class="row" style="height: 100%;">
                <div class="col-auto px-0">
                    @include('admin/left_slide', ['items' => lang('admin.nav_menu')])
                </div>
                <div class="col px-0">
                    @if(isset($content))
                        {{ $content }}
                    @endif

                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <div>
        @include('admin/footer')
    </div>
</div>
</body>
</html>
