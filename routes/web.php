<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;






//page de contact
Route::get('/contact', function () {
    return view('contact');
});

//page à propos
Route::get('/about', function () {
    return view('about');
});



//page accueil
Route::get('/', function(){
    return view ('home', [ 'jobs' => Job::all()]);
});

//page jobs
Route::get('/jobs/{id}', function($id){
    $jobs = Job::all();

    $job = Job::find($id);

    return view('job', ['job' => $job]);
});
