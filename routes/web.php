<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/portfolio', 'portfolio')->name('portfolio');
Route::view('/contact', 'contact')->name('contact');

Route::post('/contact', function () {
    return back()->with('success', 'Thank you! We will be in touch within 24 hours.');
})->name('contact.submit');

// Design Gallery
Route::view('/design-gallery/home-interiors', 'design-gallery.home-interiors')->name('design-gallery.home-interiors');
Route::view('/design-gallery/modular-kitchen', 'design-gallery.modular-kitchen')->name('design-gallery.modular-kitchen');
Route::view('/design-gallery/living-room', 'design-gallery.living-room')->name('design-gallery.living-room');
Route::view('/design-gallery/bedroom', 'design-gallery.bedroom')->name('design-gallery.bedroom');
Route::view('/design-gallery/wardrobe', 'design-gallery.wardrobe')->name('design-gallery.wardrobe');
Route::view('/design-gallery/space-saving-furniture', 'design-gallery.space-saving-furniture')->name('design-gallery.space-saving-furniture');
Route::view('/design-gallery/home-office', 'design-gallery.home-office')->name('design-gallery.home-office');
Route::view('/design-gallery/bathroom', 'design-gallery.bathroom')->name('design-gallery.bathroom');

// Guides
Route::view('/guides/modular-kitchen-design-ideas', 'guides.modular-kitchen-design-ideas')->name('guides.modular-kitchen-design-ideas');
Route::view('/guides/bedroom-design-ideas', 'guides.bedroom-design-ideas')->name('guides.bedroom-design-ideas');
Route::view('/guides/home-interior-design-ideas', 'guides.home-interior-design-ideas')->name('guides.home-interior-design-ideas');
Route::view('/guides/bathroom-design-ideas', 'guides.bathroom-design-ideas')->name('guides.bathroom-design-ideas');
Route::view('/guides/wardrobe-design-ideas', 'guides.wardrobe-design-ideas')->name('guides.wardrobe-design-ideas');
Route::view('/guides/living-room-interior-design-ideas', 'guides.living-room-interior-design-ideas')->name('guides.living-room-interior-design-ideas');
Route::view('/guides/home-decor-trends', 'guides.home-decor-trends')->name('guides.home-decor-trends');

// Cities
Route::view('/cities/bangalore', 'cities.bangalore')->name('cities.bangalore');
Route::view('/cities/hyderabad', 'cities.hyderabad')->name('cities.hyderabad');
Route::view('/cities/chennai', 'cities.chennai')->name('cities.chennai');
Route::view('/cities/mumbai', 'cities.mumbai')->name('cities.mumbai');

// Price Calculators
Route::view('/price-calculators/home-interior-price-calculator', 'price-calculators.home-interior-price-calculator')->name('price-calculators.home-interior-price-calculator');
Route::view('/price-calculators/kitchen-price-calculator', 'price-calculators.kitchen-price-calculator')->name('price-calculators.kitchen-price-calculator');

// More
Route::view('/customer-stories', 'more.customer-stories')->name('more.customer-stories');
Route::view('/blogs', 'more.blogs')->name('more.blogs');

// Offerings
Route::view('/offerings', 'offerings')->name('offerings');
