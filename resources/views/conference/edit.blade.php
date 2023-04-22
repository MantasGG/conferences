@extends('layouts.app')

@section('title', 'Conference Edit Form')

@section('content')
    <div class="container">
        <h4 class="mb-4">Conference Update Form</h4>
        <form action="{{ route('conference.update', ['id' => $conference->id]) }}" method="POST">
            @csrf
            @method('PUT')
            @include('conference.partials.form')
            <div>
                <a href="{{ route('index') }}" class="btn btn-secondary">Back</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
