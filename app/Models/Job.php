<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Job{
    public static function all(): array
    {
        return  [[
            'id'=>1,
            'title'=>'PHP Developer',
            'description'=>'This is a PHP Developer job description template. You can post this template on job boards to attract prospect applicants. PHP Developer responsibilities include: Writing clean, fast PHP to a high standard, in a timely and scalable way Producing detailed specifications Troubleshooting, testing and maintaining the core product software and databases',
            'location'=>'Lagos',
            'salary'=>'$5000',
            'company'=>'Google'
        ],
        [
            'id'=>2,
            'title'=>'Python Developer',
            'description'=>'This is a Python Developer job description template. You can post this template on job boards to attract prospect applicants. Python Developer responsibilities include: Writing effective, scalable code Developing back-end components to improve responsiveness and overall performance Integrating user-facing elements into applications',
            'location'=>'Abuja',
            'salary'=>'$4000',
            'company'=>'Facebook'
        ],
        [
            'id'=>3,
            'title'=>'Java Developer',
            'description'=>'This is a Java Developer job description template. You can post this template on job boards to attract prospect applicants. Java Developer responsibilities include: Designing and developing high-volume, low-latency applications for mission-critical systems and delivering high-availability and performance Contributing in all phases of the development lifecycle Writing well-designed, efficient, and testable code',
            'location'=>'Port Harcourt',
            'salary'=>'$6000',
            'company'=>'Microsoft' 
        ]
        ];
    }

    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if(!$job){
            abort(404);
        }

        return $job;
    }
}


