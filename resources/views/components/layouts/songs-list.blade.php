<table>
    <thead>
        <tr>
            <th>Serial No</th>
            <th>Song Title</th>
            <th>Artist Name</th>
            <th>Album Name</th>
            <th>Duration</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($songs as  $song)

        <tr>
            <td>{{ $song->id }}</td>
            <td>{{ $song->title }}</td>
            <td>{{ $song->artist }}</td>
            <td>Album 1</td>
            <td>3:45</td>
	</tr>
       @endforeach
    </tbody>
</table>