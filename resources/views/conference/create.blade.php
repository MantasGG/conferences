@extends('layouts.app')

@section('title', 'Conference creation form')

@section('content')
    <h4>Conference creation form</h4>
    <a href="{{ route('conference.index') }}">
        <button type="button">Back</button>
    </a>
    <form action="{{ route('conference.store') }}" method="POST">
        @csrf
        @include('conference.partials.form')
        <div>
            <input type="submit" value="Create">
        </div>
    </form>
@endsection
