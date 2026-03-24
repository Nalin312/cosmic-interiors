@extends('layouts.app')
@section('title', 'Bangalore | Cosmic Interiors')

@section('content')
@include('subpages._placeholder', [
    'pageTitle' => 'Bangalore',
    'pageSubtitle' => 'Placeholder city page for Bangalore-focused interior services and projects.',
    'category' => 'Cities',
])
@endsection
