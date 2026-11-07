<x-layout>
    <!-- INDEX PAGE OR HOME PAGE PROVIDING BACKGROUND ON UCC AS AN INSTITUTION AND PURPOSE OF SITE -->
    <x-slot:title>
        Welcome | UCC IT Department
    </x-slot:title>

    <!-- INTRODUCTION WELCOMES THE USER TO THE SITE -->
    <div class="max-w-6xl mx-auto px-4 py-6">

        <section class="home-section text-center mb-5">
            <h2 id="specialh2">Welcome to the UCC IT Department</h2>

            <p id="specialp" class="mt-3">
                Your central hub for Information Technology
                department information, academic resources
                and student updates. Your official progressive web application designed to provide streamlined access
                to departmental information, academic resources, faculty directories, and core institutional services.
            </p>
        </section>

    <!-- BIG BANNER THAT GOES ALL ACROSS THE PAGE DETAILING PAGE FEATURES-->
    <section class="hero">

        <img class="hero-logo" src="{{ asset('gallery/logo.png') }}" alt="UCC Info Tech Logo">

        <div class="hero-text">
            <img src="{{ asset('gallery/web_logo.png') }}" alt="Web Icon" class="hero-icon">
            <h2>Stay Connected. Stay Informed.</h2>
            <p>
                This is your one-stop spot for everything IT at the University of the
                Commonwealth Caribbean. Keep up with department news, find your lecturers,
                check out our courses, see how to apply, and follow UCC on social media,
                all in one app on your phone, tablet or laptop.
            </p>
            <a class="hero-btn" href="{{ route('admissions') }}">Join Our Department</a>
        </div>

    </section>

    <!-- BACKGROUND INFO ON  UCC AS AN INSTITUTION, ACCREDITATION-->
        <section class="headings mt-5">
            <div>
                <h2 id="specialh2">Our Institution</h2>
            </div>
        </section>

    </div>

    <section class="photostyle">
        <div class="photo-col">
            <img src="gallery/ucc_building.jpg" alt="UCC Campus Building">
        </div>
        <div class="text-col">
            <div class="label">University of the Commonwealth Caribbean</div>
            <h2>Excellence in Tertiary Education</h2>
            <p>
                As Jamaica's premier private tertiary institution, the University of the Commonwealth of the Caribbean (UCC) has a distinguished history rooted in academic rigor, professional development, and technological advancement. Fully registered and accredited by the University Council of Jamaica (UCJ),  UCC is also registered by the Jamaica Tertiary Education Commission, JTEC, the official GOJ regulatory body, as a University. Furthermore, the University of the Commonwealth Caribbean holds International Accreditation from ASIC (Accreditation Service for International Schools, Colleges, and Universities) with Premier Status for its commendable Areas of Operation. UCC is committed to delivering world-class education that meets the dynamic demands of the global workforce.
            </p>
        </div>
    </section>

</x-layout>