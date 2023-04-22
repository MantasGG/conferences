<tr class="active">
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
        <form action="{{ route('conference.destroy', ['id' => $conference->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </td>
</tr>
