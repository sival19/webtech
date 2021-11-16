<html lang="">
<head>
    <title>Artists</title>
</head>
<body>
<h1>Welcome to my webpage</h1>

<ul>
    @foreach($artists as $artist)
    <li><a href="{{ route('artists.show', [$artist->id]) }}">{{ $artist->name }}</a></li>
        @endforeach
</ul>
</body>

</html>
