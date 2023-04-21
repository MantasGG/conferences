<tr>
    <td>{{ $conference['id'] }}</td>
    <td>{{ $conference['title'] }}</td>
    <td>{{ $conference['description'] }}</td>
    <td>{{ $conference['date'] }}</td>
    <td>{{ $conference['address'] }}</td>
    <td>
        <a href="{{ route('conference.show', ['conference' => $conference->id]) }}">
            <button type="button">View</button>
        </a>
        <a href="{{ route('conference.edit', ['id' => $conference['id']]) }}">
            <button type="button">Edit</button>
        </a>
    </td>
</tr>
