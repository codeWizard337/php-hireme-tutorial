<?php

use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert([
            'position' => 'Software Engineer',
            'qualification' => 'Having studied one of the following subjects:' . "\n" . '- Computer science' . "\n" . '- Computer software/computer systems engineering' . "\n" . '- Electronics' . "\n" . '- Information systems' . "\n" . '- Mathematics' . "\n" . '- Physics',
            'description' => 'Create, maintain, audit and improve systems to meet particular needs, often as advised by a systems analyst or architect, testing both hard and software systems to diagnose and resolve system faults.',
            'address' => 'KH Syahdan',
            'city' => 'Jakarta',
            'salary' => 720000000,
            'contact' => '62211234567',
            'is_fulltime' => true,
            'company_id' => 1,
        ]);

        DB::table('jobs')->insert([
            'position' => 'Database Manager',
            'qualification' => '- Bachelor\'s degree in management information systems (MIS), computer science, information systems, or information technology.' . "\n" . '- At least two years\' experience in database management. Advanced proficiency in Structured Query Language (SQL).' . "\n" . '- In-depth knowledge of database technologies, architecture, and data security.',
            'description' => 'Maintains database results by setting and enforcing standards and controls. Prepares for database expansion by studying plans and requirements; advising senior technical management; coordinating design and programming.',
            'address' => 'KH Syahdan',
            'city' => 'Surabaya',
            'salary' => 540000000,
            'contact' => '62219638527',
            'is_fulltime' => false,
            'company_id' => 2,
        ]);

        DB::table('jobs')->insert([
            'position' => 'DevOps',
            'qualification' => 'DevOps engineer roles typically ask for a degree in a technical or a STEM (science, technology, engineering and mathematics) field, with some requiring applicants to have a masters degree. Strong degree results (at least a 2.1) are also usually desired by recruiters.',
            'description' => 'DevOps is a series of practices and processes that are intended to speed up and automate aspects of the processes of developing, testing and releasing software, allowing for the continuous delivery of software and software updates.',
            'address' => 'Senayan',
            'city' => 'Semarang',
            'salary' => 600000000,
            'contact' => '62214567891',
            'is_fulltime' => true,
            'company_id' => 4,
        ]);
    }
}
