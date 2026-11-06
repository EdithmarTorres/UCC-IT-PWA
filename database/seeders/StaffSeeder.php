<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    public function run(): void
    {
        $people = [
            [
                'name'  => 'Dr. Sajjad Hussain Rizvi',
                'title' => 'Lecturer',
                'phone' => '+92-322-2996265',
                'email' => 'srizvi@faculty.ucc.edu.jm',
                'photo' => 'lecturer_dr_rizvi.png',
            ],
            [
                'name'  => 'Dr. Peter Ndajah',
                'title' => 'Dean, School of Mathematics, Science and Technology',
                'phone' => '+1-876-906-3000',
                'email' => 'deanmathscitech@ucc.edu.jm',
                'photo' =>  'dean_dr_ndajah.png',   
            ],
            [
                'name'  => 'Mr. Otis Osbourne',
                'title' => 'Head of Department, Information Technology',
                'phone' => '+1-876-578-0804',
                'email' => 'ithod@ucc.edu.jm',
                'photo' =>  'otis_osbourne.png',   
            ],
            [
                'name'  => 'Mr. Eduardo Anderson',
                'title' => 'Group Chief Information and AI Officer',
                'phone' => '+1-876-906-3000',
                'email' => 'smssupport@ucc.edu.jm',
                'photo' => 'eduardo_anderson.png',
            ],
            [
                'name'  => 'Mr. Neil Williams',
                'title' => 'Lecturer',
                'phone' => '+1-876-906-3000',
                'email' => 'itlecturer@ucc.edu.jm',
                'photo' => 'lecturer_mr_williams.png',
            ],
            [
                'name'  => 'Ms. Edithmar Torres',
                'title' => 'Student',
                'phone' => '+1-234-567-8910',
                'email' => 'student@ucc.edu.jm',
                'photo' => 'edithmar_torres.png',
            ]
        ];

        foreach ($people as $person) {
            //This prevents duplicates if i run the seeder twice
            Staff::updateOrCreate(['email' => $person['email']], $person);
        }
    }
}