@extends('layouts.app')

@section('title', 'Conference creation form')

@section('content')
    <h4>Conference creation form</h4>
    <form action="{{ route('conference.store') }}" method="POST">
        @csrf
        <div>
            <label for="title-input">Title</label>
            <input id="title-input" type="text" name="title" value="{{ old('title') }}">
        </div>
        <div>
            <label for="description-input">Description</label>
            <input id="description-input" type="textarea" name="description" value="{{ old('description') }}">
        </div>
        <div>
            <label for="date-input">Date</label>
            <input id="date-input" type="date" name="date" value="{{ old('date') }}">
        </div>
        <div>
            <label for="address-input">Address</label>
            <input id="address-input" type="text" name="address" value="{{ old('address') }}">
        </div>
        <br>
        @if($errors->any())
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div>
            <input type="submit" value="Create">
        </div>
    </form>
@endsection
