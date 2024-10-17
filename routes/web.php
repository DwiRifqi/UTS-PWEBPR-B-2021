<?php

use Illuminate\Support\Facades\Route;
use Faker\Factory as Faker;

// Halaman Home (Welcome)
Route::get('/', function () {
    return view('login');
});

// Halaman Contact
// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get("/contact", function(){
    $contacts = [];
    $faker = Faker::create();
    for($i = 1; $i <=10; $i++){
        $contacts[]= [
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'phone' => $faker->phoneNumber
        ];
    };
    return view("contact", ['contacts' => $contacts]);
});

// Halaman Login
Route::get('/login', function () {
    return view('login');
});

// Halaman Register
Route::get('/register', function () {
    return view('register');
});
