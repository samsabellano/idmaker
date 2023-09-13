<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/dependencies.css') }}" data-turbo-track="reload">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}" data-turbo-track="reload">
    <title>@yield('title', 'Web ID Maker')</title>
    @livewireStyles
</head>

<body>
    <main class="login__main login__main__body">
        <div class="login__wrapper">
            <div class="container">
                <div class="login__card">
                    <div class="py-4 text-center login__header mb-2">
                        <h3>Web ID Maker</h3>
                        <small>Welcome back!</small>
                    </div>
                    @livewire('auth.login')
                </div>
            </div>
        </div>
    </main>
    @livewireScripts
    <script src="{{ asset("js/app.js") }}"></script>
    <script src="{{ asset("js/bootstrap.bundle.min.js") }}"></script>
</body>

</html>
