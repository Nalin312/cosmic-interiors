@extends('layouts.app')
@section('title', 'Space Saving Furniture | Cosmic Interiors')

@php
    $pageTitle = 'Space Saving Furniture';
    $heroHeading = 'Space Saving Furniture Designs';
    $heroImage = asset('Images/972af4fc-04c3-441e-ad50-2ba20ae0d3ba.jfif');
    $designCards = [
        ['title' => 'Foldable Dining Counter', 'subtitle' => 'Dual-use surfaces for compact homes', 'image' => asset('Images/972af4fc-04c3-441e-ad50-2ba20ae0d3ba.jfif')],
        ['title' => 'Storage Sofa Unit', 'subtitle' => 'Hidden compartments for living room', 'image' => asset('Images/homelux.jpg')],
        ['title' => 'Wall Mounted Study Desk', 'subtitle' => 'Slim workstation for daily productivity', 'image' => asset('Images/6ef6a30e-b69c-40d9-97fd-7ddf8b79768c.jfif')],
        ['title' => 'Convertible Bedroom Furniture', 'subtitle' => 'Flexible use between day and night', 'image' => asset('Images/2488a4ab-bbe3-488a-a4ed-d359e3cfdc41.jfif')],
        ['title' => 'Compact Wardrobe System', 'subtitle' => 'High utility in narrow wall width', 'image' => asset('Images/cd1e9de9-0b61-43ca-a37d-ca746a70993f.jfif')],
        ['title' => 'Kitchen Utility Rack Plan', 'subtitle' => 'Vertical organizers for everyday use', 'image' => asset('Images/2485cf12-1706-456a-a104-a41ad4e21bb0.jfif')],
        ['title' => 'Modular Seating Corner', 'subtitle' => 'Reconfigurable layout for guests', 'image' => asset('Images/779c4e03-c3bf-42c5-afe4-1138b763f65d.jfif')],
        ['title' => 'TV Unit Storage Bench', 'subtitle' => 'Media plus storage in one block', 'image' => asset('Images/f7d24c7a-6cd8-424a-927a-6cd4fea2b9a1.jfif')],
    ];
@endphp

@include('design-gallery._design-gallery-template')
