<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Minha Aplicação')</title>
    @vite('resources/css/app.css') {{-- Tailwind via Vite --}}
</head>
<body class="bg-gray-100 text-gray-800">

    <nav class="bg-white shadow p-4 mb-6">
        <div class="max-w-7xl mx-auto flex justify-between">
            <span class="font-bold">Minha App</span>
            <a href="/" class="text-blue-600 hover:underline">Home</a>
        </div>
    </nav>

    <main class="px-4">
        @yield('content')
    </main>

</body>
</html>
