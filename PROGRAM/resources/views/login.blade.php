<!DOCTYPE html>
<html lang="{{ str_replace( app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('css/appstyle/genosstyle.1.0.css') }}" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Styles -->
    <script src="{{ asset('js/swal.js') }}"></script>

    <style>
        body {
            font-family: 'Nunito';
        }
</style>
</head>

<body class="bg-accent-color">
 ($errors->any())
    {{-- <h4>{{$errors}}</h4> --}}
    {{-- <h4>{{$errors->first()}}</h4> --}}
    {{-- <h4>{{$errors->first() == 'The password field is required.' ? 'swal' : 'input'}}</h4> --}}
    @if ($errors->first())
        <script>
            swal('{{ $errors->first() }}', {
                icon: 'warning',
                buttons: false,
                timer: 2000
            })
        </script>
    @endif
@endif
    <div style="height: 100vh">
        <div class="login">
            <div class="panel-login pinggiran-bunder-10 bayangan-accent ">
                <p class="text-center mt-3 h2 fw-bold">Login</p>
                <form class="p-3" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control login" name="username" id="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control login" name="password" id="password">
                    </div>

                    <button type="submit" class="btn-utama ms-auto   mt-4 d-block mb-3">LOGIN</button>
                </form>
            </div>
        </div>
        <div class="logo-login">
            <img src="{{ asset('images/local/logo-perusahaan.png') }}">
        </div>

    </div>

</html>