@extends('layouts.app')

@section('content')
<h1>Conferences list</h1>
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
