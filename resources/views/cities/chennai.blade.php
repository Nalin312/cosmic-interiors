@extends('layouts.app')
@section('title', 'Chennai | Cosmic Interiors')

@section('content')
@include('subpages._placeholder', [
    'pageTitle' => 'Chennai',
    'pageSubtitle' => 'Placeholder city page for Chennai-focused interior services and projects.',
    'category' => 'Cities',
])
@endsection
