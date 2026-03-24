@extends('layouts.app')
@section('title', 'Blogs | Cosmic Interiors')

@section('content')
@include('subpages._placeholder', [
    'pageTitle' => 'Blogs',
    'pageSubtitle' => 'Placeholder page for editorial posts, design articles, and updates.',
    'category' => 'More',
])
@endsection
