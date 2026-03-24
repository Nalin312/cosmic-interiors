@extends('layouts.app')
@section('title', 'Mumbai | Cosmic Interiors')

@section('content')
@include('subpages._placeholder', [
    'pageTitle' => 'Mumbai',
    'pageSubtitle' => 'Placeholder city page for Mumbai-focused interior services and projects.',
    'category' => 'Cities',
])
@endsection
