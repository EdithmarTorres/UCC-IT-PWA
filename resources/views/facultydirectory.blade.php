<x-layout>
    <h2 id = "specialh2">Faculty and Staff Directory </h2>
    <p id = "specialp">Meet the faculty and staff of the UCC IT Department.</p>

    <div class="staff-grid">
        @foreach ($staff as $member)
            <div class="staff-card">

                @if ($member->photo)
                    <img src="{{ asset('gallery/' . $member->photo) }}" alt="{{ $member->name }}">
                @else
                    <div class="staff-initials">{{ $member->initials }}</div>
                @endif

                <h2>{{ $member->name }}</h2>
                <p class="staff-title">{{ $member->title }}</p>
                
                <div class="staff-buttons">
                    <a href="tel:{{ preg_replace('/[^0-9+]/', '', $member->phone) }}">📞 Call</a>
                    <a href="mailto:{{ $member->email }}">✉️ Email</a>
                </div>

            </div>
        @endforeach
    </div>
</x-layout>