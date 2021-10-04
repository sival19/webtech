<html>


<body>
<h1>{{ $artist->name }}</h1>
<a href="{{ route('home') }}">Back</a>
@if(session()->has('message'))
<p>{{ session()->get('message') }}</p>
@endif
<h2>Albums:</h2>
<ul>
    @foreach($artist->albums as $album)
    <li>{{ $album->name }} - <a href="{{ route('artist.deletAlbum', [$artist->id, $album->id]) }}">Remove</a></li>
        @endforeach
</ul>

<h3>Add album</h3>
<form action="{{ route('artist.addAlbum', [$artist->id]) }}" method="post">
    @csrf
    <label>Album:</label>
    <input type="text" name="name" placeholder="Album Name">
    <button type="submit">add</button>
</form>
</body>


</html>
