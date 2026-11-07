
<!DOCTYPE html>
<html lang="en" data-theme="lofi">

<head>
    <!-- CREATED BY: EDITHMAR TORRES | 20227025 -->
    <!-- INTERNET AUTHORING 2, DATED: NOVEMBER 7, 2026 -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Edithmar Torres">

    <!-- WEBSITE FAVICON -->
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">

    <!-- MOBILE APP ICON -->
    <link rel="apple-touch-icon" href="{{ asset('logo.png') }}">

    <!-- BROWSER THEME COLOUR -->
    <meta name="theme-color" content="#0b5ed7">

    @PwaHead

    <title>UCC IT Department</title>

    <!-- LINKS TO CSS STYLE SHEET -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col bg-base-200 font-sans">

    <!-- MAIN NAVIGATION -->
    <nav class="navbar bg-base-100 ucc-navbar">

        <!-- DEPARTMENT NAME -->
        <div class="navbar-start">
            <a href="/" class="btn btn-ghost text-xl">
                🧑‍💻 UCC IT Department
            </a>
        </div>

        <!-- DESKTOP NAVIGATION -->
        <div class="navbar-end gap-1 desktop-nav">
            <a href="{{ route('home') }}" class="btn btn-ghost btn-sm">Home</a>
            <a href="{{ route('facultydirectory') }}" class="btn btn-ghost btn-sm">Faculty/Staff Directory</a>
            <a href="{{ route('courses') }}" class="btn btn-ghost btn-sm">Courses</a>
            <a href="{{ route('admissions') }}" class="btn btn-ghost btn-sm">Admissions</a>
            <a href="{{ route('social-media') }}" class="btn btn-ghost btn-sm">Social Media</a>

        </div>

        <!-- MOBILE / TABLET HAMBURGER BUTTON -->
        <div class="navbar-end mobile-nav">

            <button type="button"
                class="btn btn-ghost btn-square"
                id="nav-toggle"
                aria-label="Open navigation menu"
                aria-expanded="false"
                aria-controls="mobile-navigation">

                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">

                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />

                </svg>

            </button>

        </div>

        <!-- VERTICAL MOBILE / TABLET MENU -->
        <div class="mobile-menu" id="mobile-navigation">

            <a href="{{ route('home') }}" class="btn btn-ghost btn-sm">Home</a>
            <a href="{{ route('facultydirectory') }}" class="btn btn-ghost btn-sm">Faculty/Staff Directory</a>
            <a href="{{ route('courses') }}" class="btn btn-ghost btn-sm">Courses</a>
            <a href="{{ route('admissions') }}" class="btn btn-ghost btn-sm">Admissions</a>
            <a href="{{ route('social-media') }}" class="btn btn-ghost btn-sm">Social Media</a>

        </div>

    </nav>

    <!-- MAIN CONTENT -->
    <main class="flex-1 container mx-auto px-4 py-8">
        {{ $slot }}
    </main>

    <!-- EMAIL FAB (FLOATING ACTION BUTTON) -->
    <a href="mailto:ithod@ucc.edu.jm?subject=UCC%20IT%20Department%20Enquiry"
        class="email-fab"
        aria-label="Email the Head of Department"
        title="Email the Head of Department">

        ✉

    </a>


    <!-- PWA INSTALL BUTTON -->
    <button class="pwa-install-btn" id="pwa-install-button" title="Install App">
        <img src="{{ asset('gallery/logo.png') }}" alt="UCC IT PWA Logo">
    </button>

    <!-- FOOTER -->
    <footer class="footer footer-center p-5 bg-base-300 text-base-content text-xs">
        <div>
            <p>© 2026 UCC IT Department - Built with Laravel and ❤️</p>
        </div>
    </footer>

    @RegisterServiceWorkerScript

</body>

</html>
