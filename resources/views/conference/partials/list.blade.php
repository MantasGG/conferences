<tr class="table-light">
    <td>{{ $conference['id'] }}</td>
    <td>{{ $conference['title'] }}</td>
    <td>{{ $conference['description'] }}</td>
    <td>{{ $conference['date'] }}</td>
    <td>{{ $conference['address'] }}</td>
    <td>
        <div class="btn-group col-3" role="group">
            <a href="{{ route('conference.show', ['conference' => $conference->id]) }}" class="p-2">
                <button type="button" class="btn btn-primary">View</button>
            </a>
            @auth
                <a href="{{ route('conference.edit', ['id' => $conference['id']]) }}" class="p-2">
                    <button type="button" class="btn btn-success">Edit</button>
                </a>
                <form action="{{ route('conference.destroy', ['id' => $conference->id]) }}" method="POST" class="p-2">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            @endauth
        </div>
    </td>
</tr>
