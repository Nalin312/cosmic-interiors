@extends('layouts.app')
@section('title', 'Home Office | Cosmic Interiors')

@php
    $pageTitle = 'Home Office';
    $heroHeading = 'Home Office Interior Designs';
    $heroImage = asset('Images/6ef6a30e-b69c-40d9-97fd-7ddf8b79768c.jfif');
    $designCards = [
        ['title' => 'Compact Work Nook', 'subtitle' => 'Focused workspace in bedroom corners', 'image' => asset('Images/6ef6a30e-b69c-40d9-97fd-7ddf8b79768c.jfif')],
        ['title' => 'Wardrobe + Study Combo', 'subtitle' => 'Integrated desk with storage wall', 'image' => asset('Images/c1e19c71-6953-40e3-8002-e64cf1ff3971.jfif')],
        ['title' => 'Minimal Workstation', 'subtitle' => 'Clean desk lines and cable management', 'image' => asset('Images/cd1e9de9-0b61-43ca-a37d-ca746a70993f.jfif')],
        ['title' => 'Home Office Lounge', 'subtitle' => 'Calm seating for hybrid work style', 'image' => asset('Images/homelux.jpg')],
        ['title' => 'Dual User Desk Setup', 'subtitle' => 'Shared workstation for couples', 'image' => asset('Images/972af4fc-04c3-441e-ad50-2ba20ae0d3ba.jfif')],
        ['title' => 'Library Wall Study', 'subtitle' => 'Books, files and display in one wall', 'image' => asset('Images/4f7aed01-057c-4c2b-b5b9-8780354644d2.jfif')],
        ['title' => 'Video Call Ready Background', 'subtitle' => 'Styling-focused camera backdrop', 'image' => asset('Images/779c4e03-c3bf-42c5-afe4-1138b763f65d.jfif')],
        ['title' => 'Compact Apartment Office', 'subtitle' => 'High productivity in small footprint', 'image' => asset('Images/6ef6a30e-b69c-40d9-97fd-7ddf8b79768c.jfif')],
    ];
@endphp

@include('design-gallery._design-gallery-template')
