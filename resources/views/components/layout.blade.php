<!DOCTYPE html>
<html lang="en" data-theme="lofi">

<head>
    <!-- CREATED BY: EDITHMAR TORRES  |  20227025 -->
    <!-- INTERNET AUTHORING 2, DATED: NOVEMBER 7, 2026 -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Edithmar Torres">
    @PwaHead
    <title>UCC IT Department</title>
    <link rel="icon" href="images/JCDA_favicon.jpg" type="image/x-icon">
    
    <!-- LINKS TO CSS STYLE SHEET  -->
    <link rel="preconnect" href="<https://fonts.bunny.net>">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col bg-base-200 font-sans">
    <nav class="navbar bg-base-100">
        <div class="navbar-start">
            <a href="/" class="btn btn-ghost text-xl">🧑‍💻 UCC IT Department</a>
        </div>
        <div class="navbar-end gap-1">
            <a href="{{ route('home') }}" class="btn btn-ghost btn-sm">Home</a>
            <a href="{{ route('facultydirectory') }}" class="btn btn-ghost btn-sm">Faculty/Staff Directory</a>
            <a href="{{ route('courses') }}" class="btn btn-ghost btn-sm">Courses</a>
            <a href="{{ route('admissions') }}" class="btn btn-ghost btn-sm">Admissions</a>
            <a href="{{ route('social-media') }}" class="btn btn-ghost btn-sm">Social Media</a>
        </div>
    </nav>

    <main class="flex-1 container mx-auto px-4 py-8">
        {{ $slot }}
    </main>

    <footer class="footer footer-center p-5 bg-base-300 text-base-content text-xs">
        <div>
            <p>© 2026 UCC IT Department - Built with Laravel and ❤️</p>
        </div>
    </footer>

    @RegisterServiceWorkerScript
</body>

</html>