<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">

</head>

<body class="text-center">

    <main class="form-signin w-100 m-auto ">
        @include('komponen.alert')
        <img class="mb-4" src="{{ asset('img/ohto-register.png') }}" alt="Ohto Ai" title="Ohto Ai" width="200"
            height="200">
        <h1 class="h3 mb-3 fw-normal">Register dulu!</h1>
        <form method="POST" action="/auth/register">
            @csrf
            <div class="form-floating">
                <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email"
                    value="{{ old('email') }}">
                <label for="email">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                <label for="password">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary mb-3" type="submit">Register</button>
        </form>
        <a href="/auth/login">Sudah punya akun? Login</a>
    </main>

</body>

</html>
