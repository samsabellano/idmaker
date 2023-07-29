<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="{{ asset('js/webcam-easy.min.js') }}"></script>
    <title>{{ $title }}</title>
</head>

<body>
    <div class="page__wrapper compact__wrapper">
        @include('layouts.partials._navbar')
        <div class="page__body__wrapper">
            @include('layouts.partials._sidebar')
            <div class="page__body">
                <div class="container-fluid">
                    <div class="page__header">
                        @yield('page-header')
                    </div>
                </div>
                <div class="container-fluid px-0 px-xl-2">
                    <div class="w-100 dashboard">
                        @yield('page-main-content')
                    </div>
                </div>
                {{-- @include('layouts.partials._messages') --}}
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/flatpickr.js') }}"></script>
    @stack('modal-error')
</body>

</html>
