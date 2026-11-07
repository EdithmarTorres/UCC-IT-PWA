<x-layout>
    <!-- COURSES PAGE PROVIDING INFORMATION ON COURSES OFFERED BY THE IT DEPARTMENT -->
    <x-slot:title>
        Courses | UCC IT Department
    </x-slot:title>
    <h2 id = "specialh2">Courses</h2>

    <p id = "specialp">Explore courses part of the Information Technology programme.</p>

    <div id="course-list">
        Loading courses...

        <!-- THE COURSES.JS FILE WILL GET THE COURSES FROM THE API AND DISPLAY THEM IN THIS DIV -->
        @vite(['resources/js/courses.js'])
    </div>
</x-layout>