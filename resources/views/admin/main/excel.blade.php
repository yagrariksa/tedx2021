<table border="1">

    <tr>
        <th>no</th>
        <th>name</th>
        <th>email</th>
        <th>phone</th>
        <th>age</th>
        <th>domisili</th>
        <th>institusi</th>
    </tr>
    @foreach ($user as $u)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $u->name }}</td>
            <td>{{ $u->email }}</td>
            <td>{{ $u->phone }}</td>
            <td>{{ $u->age }}</td>
            <td>{{ $u->address }}</td>
            <td>{{ $u->institute }}</td>
        </tr>
    @endforeach
</table>
