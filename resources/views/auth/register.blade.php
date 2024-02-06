<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>

    {{-- <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/"> --}}
    {{-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
  </head>
  <body class="text-center">

    <main class="form-signin w-100 m-auto ">
    @include('komponen.alert')
    <img class="mb-4" src="{{ asset('img/ohto-ai-1.png') }}" alt="Ohto Ai" title="Ohto Ai" width="200" height="200">
    <h1 class="h3 mb-3 fw-normal">Register dulu!</h1>
    <form method="POST" action="/auth/register">
        @csrf
    <div class="form-floating">
      <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" value="{{ old('email') }}">
      <label for="email">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="password" placeholder="Password" name="password">
      <label for="password">Password</label>
    </div>

    {{-- <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div> --}}
    <button class="w-100 btn btn-lg btn-primary mb-3" type="submit">Register</button>
</form>
<a href="/auth/login">Sudah punya akun? Login</a>
</main>



  </body>
</html>
