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
            'licensed_agent' => [
                'name' => 'Licensed Agent',
                'referrals' => ['Macall Smith', 'TBD'],
            ],
            'broker' => [
                'name' => 'Broker',
                'referrals' => ['HomeRealty', 'West Michigan Luxury'],
            ],
            'realtor' => [
                'name' => 'Realtor',
                'referrals' => ['Macall Smith', 'Mark Oegema'],
            ],
            'property_manager' => [
                'name' => 'Property Manager',
                'referrals' => ['Compass Properties', 'WM Luxury'],
            ],
            'leasing_agent' => [
                'name' => 'Leasing Agent',
                'referrals' => ['Kate'],
            ],
            'buyer' => [
                'name' => 'Buyer',
                'referrals' => ['Buyer Testimony 1', 'Buyer Testimony 2'],
            ],
            'seller' => [
                'name' => 'Seller',
                'referrals' => ['Seller Testimony 1', 'Seller Testimony 2'],
            ],
            'investor' => [
                'name' => 'Investor',
                'referrals' => ['Investor Testimony 1', 'Investor Testimony 2'],
            ],
            'landlord' => [
                'name' => 'Landlord',
                'referrals' => ['Vacation Rental 101', '1% Rule'],
            ],
            'renter' => [
                'name' => 'Renter',
                'referrals' => ['Credit Check', 'Referral Form'],
            ],
            'developer' => [
                'name' => 'Residential Developer',
                'referrals' => ['T2 Construction', 'Schipper Construction'],
            ],
            'builder' => [
                'name' => 'Builder',
                'referrals' => ['Randy Bouwkamp', 'Schipper Construction'],
            ],
            'contractor' => [
                'name' => 'Contractor',
                'referrals' => ['Scott', 'Warren'],
            ],
            'lender' => [
                'name' => 'Lender',
                'referrals' => ['Consumer Credit Union', 'West Michigan Community Bank'],
            ],
            'inspector' => [
                'name' => 'Inspector',
                'referrals' => ['Shoemaker Inspection', 'Grand Home Inspection'],
            ],
            'appraiser' => [
                'name' => 'Appraiser',
                'referrals' => ['What is an Appraisal', 'Do I need an Appraisal?'],
            ],
            'title_company' => [
                'name' => 'Title Company',
                'referrals' => ['Home Title', 'West Michigan Title'],
            ],
            'attorney' => [
                'name' => 'Attorney',
                'referrals' => ['Varnum', 'Cunningham Dalman'],
            ],
            'accountant' => [
                'name' => 'Accountant',
                'referrals' => ['Mulder Fitch Weaver'],
            ],
            'insurance_agent' => [
                'name' => 'Insurance Agent',
                'referrals' => ['Jake', 'State Farm'],
            ],
            'home_staging' => [
                'name' => 'Home Staging',
                'referrals' => ['Do I Need Staging?', 'Staging Tips'],
            ],
            'photographer' => [
                'name' => 'Photographer',
                'referrals' => ['New Listing Media'],
            ],
            'videographer' => [
                'name' => 'Videographer',
                'referrals' => ['New Listing Media'],
            ],
            'interior_designer' => [
                'name' => 'Interior Designer',
                'referrals' => ['Bridget Schopp'],
            ],
            'architect' => [
                'name' => 'Architect',
                'referrals' => ['T2 Construction'],
            ],
            'landscaper' => [
                'name' => 'Landscaper',
                'referrals' => ['Mike\'s Lawncare'],
            ],
        ]
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
