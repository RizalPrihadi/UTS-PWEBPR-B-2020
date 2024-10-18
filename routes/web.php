<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\loginController;
use Faker\Factory as Faker;

Route::get('/', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/contact', function () {
    $contacts = [];
    $faker = Faker::create();
    for($i = 1; $i <= 100; $i++){
        $contacts[]= [
            'name' => $faker -> name,
            'email' => $faker -> unique() -> safeEmail,
            'phone' => $faker -> phoneNumber
        ];
    };
    return view('contact', ['contacts' => $contacts]);
});