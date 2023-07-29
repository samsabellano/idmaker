<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <title>@yield('title', 'Web ID Maker')</title>
</head>

<body>
    <main class="login__main login__main__body">
        <div class="login__wrapper">
            <div class="container">
                <div class="login__card">
                    <div class="py-4 text-center login__header mb-2">
                        <h3>Web ID Maker</h3>
                        <small>Access your dashboard</small>
                    </div>
                    <form action="{{ route('auth.login') }}" method="post" novalidate>
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" name="username" value="{{ old('username') }}"
                                class="form-control auth__text__input @error('username') is-invalid @enderror"
                                id="floatingInput" placeholder="Enter your username">
                            <label for="floatingInput" class="auth__text__input__label">Username</label>
                            @error('username')
                            <span class="text-danger custom__field__message">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="password"
                                class="form-control auth__text__input @error('password') is-invalid @enderror"
                                id="floatingPassword" placeholder="Enteryour password">
                            <label for="floatingPassword" class="auth__text__input__label">Password</label>
                            @error('password')
                            <span class="text-danger custom__field__message">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="col-12">
                                <button class="btn w-100 p-3 auth__button__submit" type="submit">Sign in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset("js/app.js") }}"></script>
    <script src="{{ asset("js/bootstrap.bundle.min.js") }}"></script>
</body>

</html>
