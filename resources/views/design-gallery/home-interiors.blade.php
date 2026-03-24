@extends('layouts.app')
@section('title', 'Home Interiors | Cosmic Interiors')

@php
    $pageTitle = 'Home Interiors';
    $heroHeading = 'Home Interior Designs';
    $heroImage = asset('Images/homelux.jpg');
    $citiesSectionClass = 'ci-dg-white';
    $faqSectionClass = 'ci-dg-white';
    $cities = [
        ['name' => 'Hyderabad', 'route' => route('cities.hyderabad')],
        ['name' => 'Mumbai', 'route' => route('cities.mumbai')],
        ['name' => 'Bengaluru', 'route' => route('cities.bangalore')],
        ['name' => 'Chennai', 'route' => route('cities.chennai')],
    ];
    $designCards = [
        ['title' => 'Modern Modular Kitchen', 'subtitle' => 'Muted stone finish with clean cabinetry', 'image' => asset('Images/d92e9717-99e7-4510-b01d-2935528e659e.jfif')],
        ['title' => 'Open Kitchen With Bar', 'subtitle' => 'Social kitchen with integrated partition', 'image' => asset('Images/f7d24c7a-6cd8-424a-927a-6cd4fea2b9a1.jfif')],
        ['title' => 'Soft Pastel Bedroom', 'subtitle' => 'Layered textures with warm tones', 'image' => asset('Images/2488a4ab-bbe3-488a-a4ed-d359e3cfdc41.jfif')],
        ['title' => 'Contemporary Wardrobe', 'subtitle' => 'Full-height storage system', 'image' => asset('Images/cd1e9de9-0b61-43ca-a37d-ca746a70993f.jfif')],
        ['title' => 'Compact Dining Counter', 'subtitle' => 'Space-saving planning for apartments', 'image' => asset('Images/972af4fc-04c3-441e-ad50-2ba20ae0d3ba.jfif')],
        ['title' => 'Integrated Vanity Niche', 'subtitle' => 'Storage and styling in one zone', 'image' => asset('Images/6ef6a30e-b69c-40d9-97fd-7ddf8b79768c.jfif')],
        ['title' => 'Long Wardrobe Wall', 'subtitle' => 'High capacity master suite storage', 'image' => asset('Images/c1e19c71-6953-40e3-8002-e64cf1ff3971.jfif')],
        ['title' => 'Luxe Living Lounge', 'subtitle' => 'Warm neutral ambient styling', 'image' => asset('Images/homelux.jpg')],
    ];
@endphp

@include('design-gallery._design-gallery-template')
