@extends('layouts.app')

@section('content')
    <div class="container">
        @if(session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif
        <div>
            <h2>#{{ $conference->id }}</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3>Title</h3>
                <p>{{ $conference->title }}</p>
                <h3>Description</h3>
                <p>{{ $conference->description }}</p>
            </div>
            <div class="col-md-6">
                <h3>Date</h3>
                <p>{{ $conference->date }}</p>
                <h3>Address</h3>
                <p>{{ $conference->address }}</p>
            </div>
        </div>
        <div>
            <a href="{{ route('index') }}" class="btn btn-secondary">Back</a>
            <a href="{{ route('conference.edit', ['id' => $conference->id]) }}" class="btn btn-primary">Edit</a>
        </div>
    </div>
@endsection
