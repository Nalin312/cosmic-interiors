@extends('layouts.app')
@section('title', 'Bedroom | Cosmic Interiors')

@php
    $pageTitle = 'Bedroom';
    $heroHeading = 'Bedroom Interior Designs';
    $heroImage = asset('Images/2488a4ab-bbe3-488a-a4ed-d359e3cfdc41.jfif');
    $designCards = [
        ['title' => 'Soft Pastel Bedroom', 'subtitle' => 'Layered comfort with elegant storage', 'image' => asset('Images/2488a4ab-bbe3-488a-a4ed-d359e3cfdc41.jfif')],
        ['title' => 'Taupe Master Suite', 'subtitle' => 'Warm palette with concealed wardrobes', 'image' => asset('Images/4f7aed01-057c-4c2b-b5b9-8780354644d2.jfif')],
        ['title' => 'Minimal Bedroom Layout', 'subtitle' => 'Clutter-free planning with soft accents', 'image' => asset('Images/6ef6a30e-b69c-40d9-97fd-7ddf8b79768c.jfif')],
        ['title' => 'Modern Wardrobe Bedroom', 'subtitle' => 'Integrated wardrobes and vanity niche', 'image' => asset('Images/c1e19c71-6953-40e3-8002-e64cf1ff3971.jfif')],
        ['title' => 'Compact Guest Bedroom', 'subtitle' => 'Flexible sleeping and storage setup', 'image' => asset('Images/cd1e9de9-0b61-43ca-a37d-ca746a70993f.jfif')],
        ['title' => 'Kids Bedroom Comfort', 'subtitle' => 'Color-balanced room with utility details', 'image' => asset('Images/2488a4ab-bbe3-488a-a4ed-d359e3cfdc41.jfif')],
        ['title' => 'Statement Headboard Room', 'subtitle' => 'Feature wall and ambient lighting', 'image' => asset('Images/4f7aed01-057c-4c2b-b5b9-8780354644d2.jfif')],
        ['title' => 'Bedroom With Study Niche', 'subtitle' => 'Sleep-work balance in one room', 'image' => asset('Images/6ef6a30e-b69c-40d9-97fd-7ddf8b79768c.jfif')],
    ];
@endphp

@include('design-gallery._design-gallery-template')
