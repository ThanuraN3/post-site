<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post-site</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-blue-200 text-light">
    <nav class="p-6 bg-blue-800 flex justify-between" id="app-text">
        <ul class="flex item-center text-light">
            <li>
                <a href="{{ route('home')}}" class="p-3 text-light">Home</a>
            </li>
            <li>
                <a href="{{ route('dashboard')}}" class="p-3  text-light">dashboard</a>
            </li>
            <li>
                <a href="{{ route('posts')}}" class="p-3  text-light">Post</a>
            </li>
        </ul>

        <ul class="flex item-center">

            @auth
                <li>
                    <a href="" class="p-3  text-light">{{ auth()->user()->name }}</a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="POST" class="p-3 inline">
                        @csrf
                        <button type="submit" class=" text-light">Logout</button>
                    </form>     
                </li>
            @endauth
            
            @guest
                <li>
                    <a href="{{ route('login')}}" class="p-3  text-light">Login</a>
                </li>
                <li>
                    <a href="{{ route('register')}}" class="p-3  text-light">Register</a>
                </li>
            @endguest
            
        </ul>
    </nav>
    @yield('content')
</body>
</html>