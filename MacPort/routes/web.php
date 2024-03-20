<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'greeting' => 'Hi there! Welcome',
        'name' => 'Friends'
    ]);
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/portfolio', function() {
    return view('portfolio');
});

Route::get('/projects', function() {
    return view('projects');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/real_estate', function() {
    return view('real_estate', [
        'roles' => [
            'licensed_agent' => 'Licensed Agent',
            'broker' => 'Broker',
            'realtor' => 'Realtor',
            'property_manager' => 'Property Manager',
            'leasing_agent' => 'Leasing Agent',
            'buyer' => 'Buyer',
            'seller' => 'Seller',
            'investor' => 'Investor',
            'landlord' => 'Landlord',
            'renter' => 'Renter',
            'developer' => 'Developer',
            'builder' => 'Builder',
            'contractor' => 'Contractor',
            'lender' => 'Lender',
            'inspector' => 'Inspector',
            'appraiser' => 'Appraiser',
            'title_company' => 'Title Company',
            'attorney' => 'Attorney',
            'accountant' => 'Accountant',
            'insurance_agent' => 'Insurance Agent',
            'home_stager' => 'Home Stager',
            'photographer' => 'Photographer',
            'videographer' => 'Videographer',
            'interior_designer' => 'Interior Designer',
            'architect' => 'Architect', ]
    ]);
});

Route::get('/front_end', function() {
    return view('front_end');
});

Route::get('/back_end', function() {
    return view('back_end');
});

Route::get('/prototyping', function() {
    return view('prototyping');
});
