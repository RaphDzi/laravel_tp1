<?php

namespace App\Models;

use illuminate\Support\Arr;

class Job
{
    public static function all() : array
    {
        return
        [
            [
                'id' => 1,
                'title' => 'dev',
                'salary' => '5000'
            ],
            [
                'id' => 2,
                'title' => 'reseau',
                'salary' => '1532'
            ],
            [
                'id' => 3,
                'title' => 'tech',
                'salary' => '4845'
            ]
        ];
    }


    public static function find($id) : array
    {
        $job =  Arr::first(Job::all(), fn($job) => $job['id'] == $id);

        if (!$job) {
            abort(404);
        }
        return $job;
    }
}
