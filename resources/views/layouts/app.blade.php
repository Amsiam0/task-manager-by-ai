<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task Manager</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    <nav class="bg-white p-6 shadow">
        <div class="container mx-auto flex justify-between">
            <a href="{{ route('tasks.index') }}" class="text-xl font-bold">Task Manager</a>
            @auth
                <div>
                    <span>{{ Auth::user()->name }}</span>
                    <a href="{{ route('logout') }}" class="ml-4 text-red-500">Logout</a>
                </div>
            @endauth
            @guest
                <a href="{{ route('login') }}">Login</a>
            @endguest
        </div>
    </nav>

    <div class="container mx-auto p-6">
        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        @yield('content')
    </div>
</body>

</html>
