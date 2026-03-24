@extends('layouts.app')
@section('title', 'Customer Stories | Cosmic Interiors')

@section('content')
@include('subpages._placeholder', [
    'pageTitle' => 'Customer Stories',
    'pageSubtitle' => 'Placeholder page for client stories, outcomes, and project experiences.',
    'category' => 'More',
])
@endsection
