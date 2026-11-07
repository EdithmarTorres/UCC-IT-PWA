<x-layout>
    <!-- FACULTY DIRECTORY PAGE INCLUDING PHOTO, TEL NO., EMAIL, TITLE AND FACULTY NAME -->
    <!-- USE OF PROTOCOLS TO HAVE USERS CALL OR EMAIL FACULTY DIRECTLY FROM THE APP -->
    <x-slot:title>
        Staff Directory | UCC IT Department
    </x-slot:title>
    <h2 id = "specialh2">Faculty and Staff Directory </h2>
    <p id = "specialp">Meet the faculty and staff of the UCC IT Department.</p>

    <!-- USE OF DATABASE/MIGRATION/DATABASE SEEDER TO POPULATE THE FACULTY DIRECTORY WITH STAFF INFORMATION -->
    <div class="staff-grid">
        <!-- LOOP THROUGH EACH STAFF MEMBER AND DISPLAY THEIR INFORMATION -->
        @foreach ($staff as $member)
            <div class="staff-card">

                @if ($member->photo)
                    <img src="{{ asset('gallery/' . $member->photo) }}" alt="{{ $member->name }}">
                @else
                    <div class="staff-initials">{{ $member->initials }}</div>
                @endif

                <h2>{{ $member->name }}</h2>
                <p class="staff-title">{{ $member->title }}</p>
                <p> Phone: {{ $member->phone }}</p>
                <p> Email: {{ $member->email }}</p>
                
                <!--CONTACT PROTOCOLS + BUTTONS -->
                <div class="staff-buttons">
                    <a href="tel:{{ preg_replace('/[^0-9+]/', '', $member->phone) }}">📞 Call</a>
                    <a href="mailto:{{ $member->email }}?subject={{ rawurlencode('UCC IT Department Enquiry') }}">✉️ Email</a>
                </div>

            </div>
        @endforeach
    </div>
</x-layout>