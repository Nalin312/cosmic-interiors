@extends('layouts.app')
@section('title', 'Wardrobe | Cosmic Interiors')

@php
    $pageTitle = 'Wardrobe';
    $heroHeading = 'Wardrobe Design Ideas';
    $heroImage = asset('Images/c1e19c71-6953-40e3-8002-e64cf1ff3971.jfif');
    $designCards = [
        ['title' => 'Full Height Wardrobe', 'subtitle' => 'Ceiling-touch storage for master room', 'image' => asset('Images/c1e19c71-6953-40e3-8002-e64cf1ff3971.jfif')],
        ['title' => 'Sliding Wardrobe Design', 'subtitle' => 'Space-saving shutter movement', 'image' => asset('Images/cd1e9de9-0b61-43ca-a37d-ca746a70993f.jfif')],
        ['title' => 'Glass Accent Wardrobe', 'subtitle' => 'Display-led premium wardrobe planning', 'image' => asset('Images/4f7aed01-057c-4c2b-b5b9-8780354644d2.jfif')],
        ['title' => 'Wardrobe With Vanity', 'subtitle' => 'Dresser and storage in one composition', 'image' => asset('Images/6ef6a30e-b69c-40d9-97fd-7ddf8b79768c.jfif')],
        ['title' => 'Kids Wardrobe Unit', 'subtitle' => 'Safe access and flexible organization', 'image' => asset('Images/2488a4ab-bbe3-488a-a4ed-d359e3cfdc41.jfif')],
        ['title' => 'Dark Wood Wardrobe', 'subtitle' => 'Rich finish with warm lighting strips', 'image' => asset('Images/d6351324-8d0f-49c6-a349-653469336700.jfif')],
        ['title' => 'Walk-in Inspired Wardrobe', 'subtitle' => 'Open and closed storage zoning', 'image' => asset('Images/c1e19c71-6953-40e3-8002-e64cf1ff3971.jfif')],
        ['title' => 'Compact Apartment Wardrobe', 'subtitle' => 'Maximum capacity in small footprint', 'image' => asset('Images/cd1e9de9-0b61-43ca-a37d-ca746a70993f.jfif')],
    ];
@endphp

@include('design-gallery._design-gallery-template')
