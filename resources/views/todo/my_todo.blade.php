<strong>ID: {{ $user->id }}</strong><br>
<strong>Name: {{ $user->name }}</strong>


<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Created At</th>
        <th>By User</th>
        <th></th>
    </tr>
    @foreach($todos as $todo)
        <tr>
            <td>{{ $todo->id }}</td>
            <td>{{ $todo->name }}</td>
            <td>{{ $todo->created_at }}</td>
            <td>{{ $todo->user->name }}</td>
            <td>
                <a href="{{ route('todos.show', $todo->id) }}">View</a>
            </td>
        </tr>
    @endforeach
</table>
