@extends('layouts.app')
@section('title', 'Modular Kitchen | Cosmic Interiors')

@php
    $pageTitle = 'Modular Kitchen';
    $heroHeading = 'Modular Kitchen Designs';
    $heroImage = asset('Images/d92e9717-99e7-4510-b01d-2935528e659e.jfif');
    $designCards = [
        ['title' => 'Parallel Kitchen', 'subtitle' => 'Efficient dual-counter workflow planning', 'image' => asset('Images/d92e9717-99e7-4510-b01d-2935528e659e.jfif')],
        ['title' => 'Island Kitchen', 'subtitle' => 'Open plan with social cooking zone', 'image' => asset('Images/f7d24c7a-6cd8-424a-927a-6cd4fea2b9a1.jfif')],
        ['title' => 'L-Shaped Kitchen', 'subtitle' => 'Compact corners with optimized storage', 'image' => asset('Images/dc210543-f742-4489-9812-cd85c989fb08.jfif')],
        ['title' => 'Minimal White Kitchen', 'subtitle' => 'Clean lines and hidden utility modules', 'image' => asset('Images/2485cf12-1706-456a-a104-a41ad4e21bb0.jfif')],
        ['title' => 'Breakfast Counter Kitchen', 'subtitle' => 'Dining integration for modern homes', 'image' => asset('Images/972af4fc-04c3-441e-ad50-2ba20ae0d3ba.jfif')],
        ['title' => 'Tall Storage Kitchen', 'subtitle' => 'Pantry-focused vertical organization', 'image' => asset('Images/c1e19c71-6953-40e3-8002-e64cf1ff3971.jfif')],
        ['title' => 'Glass Accent Kitchen', 'subtitle' => 'Display shutters with warm lighting', 'image' => asset('Images/2485cf12-1706-456a-a104-a41ad4e21bb0.jfif')],
        ['title' => 'Smart Appliance Kitchen', 'subtitle' => 'Integrated ovens and utility planning', 'image' => asset('Images/d6351324-8d0f-49c6-a349-653469336700.jfif')],
    ];
@endphp

@include('design-gallery._design-gallery-template')
