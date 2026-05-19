<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Operation</th>
    </tr>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td><a href="/deleteUser/{{ $user->id }}">Delete</a></td>
        </tr>
    @endforeach
</table>

<span>{{ $users->links() }} </span>

<style>
    .w-5 {
        display: none
    }
</style>
