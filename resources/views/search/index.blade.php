@extends('layouts.master')

@section('title', 'Search')

@section('content')
    <h2>Search Page</h2>
    <form action="{{ route('search.results') }}" method="GET">
        <input type="text" name="q" placeholder="Search...">
        <button type="submit">Search</button>
    </form>
@endsection
