@extends('layouts.app')
@section('title', 'Home Decor Trends | Cosmic Interiors')

@section('content')
@include('subpages._placeholder', [
    'pageTitle' => 'Home Decor Trends',
    'pageSubtitle' => 'Placeholder guide page for current decor directions and curated trends.',
    'category' => 'Guides',
])
@endsection
