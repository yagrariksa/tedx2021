<table border="1">

    <tr>
        <th width='4'>No.</th>
        <th width='35'>Tanggal Registrasi</th>
        <th width='45'>Nama</th>
        <th width='45'>Institusi</th>
        <th width='45'>Alamat Email</th>
        <th width='15'>Nomor HP</th>
        <th width='7'>Umur</th>
        <th width='100'>Domisili</th>
    </tr>
    @foreach ($user as $u)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ date('l, d F - H:i', strtotime($u->created_at)) }}</td>
            <td>{{ $u->name }}</td>
            <td>{{ $u->institute }}</td>
            <td>{{ $u->email }}</td>
            <td>{{ strpos(str_replace('-', '', $u->phone), '+62') === 0 ? str_replace('+62', '0', str_replace(['-', '(', ')', ' '], '', $u->phone)) : str_replace(['-', '(', ')', ' '], '', $u->phone) }}</td>
            <td>{{ $u->age }}</td>
            <td>{{ $u->address }}</td>
        </tr>
    @endforeach
</table>
