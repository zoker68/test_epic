<!doctype html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>

    <title>Urnik</title>
</head>
<body>
<div class="min-h-full">
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="hidden md:block">
                        <div class="flex items-baseline space-x-4">
                            <a href="{{route('index')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Domača stran</a>
                            <a href="{{route('uvoz')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Uvoz terminov</a>
                            <a href="{{route('create')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Ročno dodajanje</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            @yield('content')
        </div>
    </main>
</div>

</body>
</html>
