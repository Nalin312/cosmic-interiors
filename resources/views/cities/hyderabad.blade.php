@extends('layouts.app')
@section('title', 'Hyderabad | Cosmic Interiors')

@section('content')
@include('subpages._placeholder', [
    'pageTitle' => 'Hyderabad',
    'pageSubtitle' => 'Placeholder city page for Hyderabad-focused interior services and projects.',
    'category' => 'Cities',
])
@endsection
