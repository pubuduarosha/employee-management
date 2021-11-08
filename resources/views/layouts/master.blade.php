<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Employee Management</title>
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
    </head>
    <body>
        <div class="navigation_base" >
            @if(Auth::check())
            {{-- header --}}
            <div class="header">
                <a  class="nav_dashboard" href="{{ route('dashboard') }}">Dashboard</a>
                <div class="user_base">
                    {{-- admin name --}}
                    <span class="username"> Hi {{ Auth::user()->name }} </span>
                    {{-- logout --}}
                    <form action="{{ route('auth_logout') }}" method="post">
                        {{ csrf_field() }}
                        <button type="submit" class="logout_btn">Logout</button>
                    </form>
                </div>
            </div>
            @endif
        </div>
        @yield('content')
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        
        @yield('scripts')
    </body>
</html>