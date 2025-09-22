<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>
    <h1>Hello, {{ $name }}</h1>

    @if ($appName == 'Laravel')
        <p>Selamat datang di {{ $appName }}</p>
    @else
        <p>IDK!</p>
    @endif

    {{-- @isset($records)
        //
    @endisset --}}

    {{-- @empty($records)
        //
    @endempty --}}

    {{-- @isset($records)
        //
    @endisset --}}

    {{-- @auth
        //
    @endauth --}}
    {{-- @auth('admin')
        //
    @endauth --}}

    {{-- @guest
        //
    @endguest --}}
    {{-- @guest('admin')
        //
    @endguest --}}
</body>
</html>