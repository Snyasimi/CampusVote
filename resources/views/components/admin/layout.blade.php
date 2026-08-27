<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Admin</title>

    <link rel="stylesheet" href="{{ asset('css/adminPages/colors.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminPages/layout.css') }}">

    @stack('stylesheets')
</head>

<body>

    {{-- Success notification --}}
    @if(session('success'))
        <div class="notification notification-success">
            {{ session('success') }}
        </div>
    @endif


    {{-- Info notification --}}
    @if(session('info'))
        <div class="notification notification-info">
            {{ session('info') }}
        </div>
    @endif


    {{-- Error notification --}}
    @if(session('error'))
        <div class="notification notification-error">
            {{ session('error') }}
        </div>
    @endif


    <div class="admin-layout">

        {{-- Sidebar --}}
        <x-admin.navigation />


        {{-- Page content --}}
        <main class="admin-layout__content">
            {{ $slot }}
        </main>

    </div>

</body>

</html>