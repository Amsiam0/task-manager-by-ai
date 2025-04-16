<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task Manager - Welcome</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-sans">
    <header class="bg-white shadow">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-gray-800">Task Manager</h1>
            <nav>
                @guest
                    <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-800 mx-2">Login</a>
                    <a href="{{ route('register') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Get
                        Started</a>
                @else
                    <a href="{{ route('tasks.index') }}" class="text-blue-600 hover:text-blue-800 mx-2">Go to Tasks</a>
                    <form id="logout-form" method="POST" action="#" class="inline">
                        @csrf
                        <button type="button" onclick="logout()"
                            class="text-red-600 hover:text-red-800 mx-2">Logout</button>
                    </form>
                @endguest
            </nav>
        </div>
    </header>

    <main class="container mx-auto px-6 py-12 text-center">
        <h2 class="text-4xl font-bold text-gray-800 mb-4">Organize Your Life with Task Manager</h2>
        <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
            Easily create, track, and manage your tasks in one place. Stay productive and never miss a deadline.
        </p>
        <div class="flex justify-center gap-4">
            <a href="{{ route('register') }}"
                class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 text-lg">
                Start for Free
            </a>
            <a href="{{ route('login') }}"
                class="border border-blue-500 text-blue-500 px-6 py-3 rounded-lg hover:bg-blue-50 text-lg">
                Sign In
            </a>
        </div>
    </main>

    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; {{ date('Y') }} Task Manager. All rights reserved.</p>
        </div>
    </footer>

    <script>
        async function logout() {
            try {
                await window.api.logout();
                localStorage.removeItem('token');
                window.location.href = '{{ route('login') }}';
            } catch (error) {
                alert('Logout failed: ' + error.message);
            }
        }
    </script>
</body>

</html>
