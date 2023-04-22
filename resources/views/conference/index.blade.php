@extends('layouts.app')

@section('content')
<h1>Conferences list</h1>
@if(session('status'))
    <div style="background-color: green; color: lime">{{ session('status') }}</div>
@endif
<a href="{{ route('conference.create') }}"><button type="button">Create conference</button></a>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Description</th>
        <th>Date</th>
        <th>Address</th>
        <th>Actions</th>
    </tr>

    @each('conference.partials.list', $conferences, 'conference')

</table>
@endsection
