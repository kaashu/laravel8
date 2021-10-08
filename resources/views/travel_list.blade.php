<html>
<head>
    <title>Travel List</title>
</head>

<body>
    <h1>Laravel 8</h1>
    <h2>My Travel Bucket List</h2>
    <h2>Places I'd Like to Visit</h2>
    <ul>
      @foreach ($togo as $newplace)
        <li>{{ $newplace->name }}</li>
      @endforeach
    </ul>

    <h2>Places I've Already Been To</h2>
    <ul>
          @foreach ($visited as $place)
                <li>{{ $place->name }}</li>
          @endforeach
    </ul>
</body>
</html>