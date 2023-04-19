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
    </tr>
    @foreach($conferences as $conference)
        <tr>
            <td><a href="/conference/{{ $conference['id'] }}">{{ $conference['id'] }}</a></td>
            <td>{{ $conference['title'] }}</td>
            <td>{{ $conference['description'] }}</td>
            <td>{{ $conference['date'] }}</td>
            <td>{{ $conference['address'] }}</td>
        </tr>
    @endforeach

</table>
@endsection
