<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite('resources/css/app.css')
    <!-- Dependencies -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>

<body class="bg-black flex items-center justify-center min-h-screen">
    <div class="w-[500px]">
        <form action="{{ route('users-post') }}" method="POST">
            @csrf
            @method('POST')

            <x-multi-select :items="$users" name="selected_users" />

            <button class="p-2 bg-white mt-4 rounded-lg border-amber-200 border-2">Submit</button>
        </form>
    </div>
</body>

</html>
