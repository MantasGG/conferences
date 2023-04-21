@extends('layouts.app')

@section('content')
    @if(session('status'))
        <div style="background-color: green; color: lime">{{ session('status') }}</div>
    @endif
    <h2>#{{ $conference['id'] }}</h2>
    <h2>Title</h2>
    <p>{{ $conference['title'] }}</p>
    <h3>Description</h3>
    <p>{{ $conference['description'] }}</p>
    <h3>Date</h3>
    <p>{{ $conference['date'] }}</p>
    <h3>Address</h3>
    <p>{{ $conference['address'] }}</p>
@endsection
