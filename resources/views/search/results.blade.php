@extends('layouts.master')

@section('title', 'Search Results')

@section('content')
    <h2>Search Results for "{{ $query }}"</h2>
    <p>No results found.</p>
@endsection
