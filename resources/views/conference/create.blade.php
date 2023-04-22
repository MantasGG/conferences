@extends('layouts.app')

@section('title', 'Conference creation form')

@section('content')
    <div class="container">
        <h4 class="mb-4">Conference Creation Form</h4>
        <form action="{{ route('conference.store') }}" method="POST">
            @csrf
            @include('conference.partials.form')
            @if($errors->any())
                <div class="alert alert-danger mt-3">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="text-center">
                <button type="submit" class="btn btn-primary mt-4">Create</button>
            </div>
        </form>
    </div>
@endsection
