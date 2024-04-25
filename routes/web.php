<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view("Home",[
		"title"=>"Home",
		"active"=>"home"
	]);
});

Route::get('/services', function () {
    // return view('welcome');
    return view("Services",[
		"title"=>"Services",
		"active"=>"services"	
	]); //Using Closure
});

Route::get('/about', function () {
    // return view('welcome');
    return view("About",[
		"title"=>"about",
		"active"=>"about"	
	]); //Using Closure
});

Route::get('/projects', function () {
    // return view('welcome');
    return view("Projects",[
		"title"=>"projects",
		"active"=>"projects"	
	]); //Using Closure
});

Route::get('/testimonial', function () {
    // return view('welcome');
    return view("Testimonial",[
		"title"=>"testimonial",
		"active"=>"testimonial"	
	]); //Using Closure
});

Route::get('/contact', function () {
    // return view('welcome');
    return view("Contact",[
		"title"=>"contact",
		"active"=>"contact"	
	]); //Using Closure
});

