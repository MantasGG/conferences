@extends('layouts.app')

@section('title', 'Conference edit form')

@section('content')
    <h4>Conference update form</h4>
    <a href="{{ route('index') }}"><button type="button">Back</button></a>
    <form action="{{ route('conference.update', ['id' => $conference->id]) }}" method="POST">
        @csrf
        @method('PUT')
        @include('conference.partials.form')
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
@endsection
