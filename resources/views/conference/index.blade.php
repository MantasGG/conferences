@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Conferences List</h1>
    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif
    @auth
        <a href="{{ route('conference.create') }}" class="btn btn-primary mb-3">Create Conference</a>
    @endauth
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Date</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @each('conference.partials.list', $conferences, 'conference')
            </tbody>
        </table>
    </div>
@endsection
