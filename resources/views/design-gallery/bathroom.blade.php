@extends('layouts.app')
@section('title', 'Bathroom | Cosmic Interiors')

@php
    $pageTitle = 'Bathroom';
    $heroHeading = 'Bathroom Interior Designs';
    $heroImage = asset('Images/2485cf12-1706-456a-a104-a41ad4e21bb0.jfif');
    $designCards = [
        ['title' => 'Modern Vanity Design', 'subtitle' => 'Storage-backed vanity with clean lines', 'image' => asset('Images/2485cf12-1706-456a-a104-a41ad4e21bb0.jfif')],
        ['title' => 'Compact Bathroom Layout', 'subtitle' => 'Efficient wet and dry zoning', 'image' => asset('Images/972af4fc-04c3-441e-ad50-2ba20ae0d3ba.jfif')],
        ['title' => 'Muted Tone Bathroom', 'subtitle' => 'Warm neutral palette with soft lighting', 'image' => asset('Images/6ef6a30e-b69c-40d9-97fd-7ddf8b79768c.jfif')],
        ['title' => 'Premium Bath Upgrade', 'subtitle' => 'Feature fittings and integrated storage', 'image' => asset('Images/4f7aed01-057c-4c2b-b5b9-8780354644d2.jfif')],
        ['title' => 'Guest Bathroom Plan', 'subtitle' => 'Simple aesthetics with practical utility', 'image' => asset('Images/cd1e9de9-0b61-43ca-a37d-ca746a70993f.jfif')],
        ['title' => 'Master Bathroom Detail', 'subtitle' => 'Refined surfaces and vertical cabinets', 'image' => asset('Images/c1e19c71-6953-40e3-8002-e64cf1ff3971.jfif')],
        ['title' => 'Bright Bathroom Theme', 'subtitle' => 'High reflectivity for spacious look', 'image' => asset('Images/dc210543-f742-4489-9812-cd85c989fb08.jfif')],
        ['title' => 'Small Home Bathroom', 'subtitle' => 'Practical fixtures in compact footprint', 'image' => asset('Images/2485cf12-1706-456a-a104-a41ad4e21bb0.jfif')],
    ];
@endphp

@include('design-gallery._design-gallery-template')
