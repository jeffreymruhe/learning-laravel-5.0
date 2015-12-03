@extends('app')

@section('content')

    <h1>About Me: {{ $first }} {{ $last }}</h1>

    <h3>People I Like:</h3>
    <ul>
        @foreach ($people as $person)
            <li>{{ $person }}</li>
        @endforeach
    </ul>

<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vestibulum ac purus sit amet ultrices. Proin viverra augue vel venenatis mattis. Ut pharetra eu ante id consectetur. Phasellus ipsum eros, eleifend vel nisi at, maximus mollis sem. Nulla pretium condimentum molestie. Nam finibus convallis ligula quis dictum. Mauris sit amet cursus urna.
</p>

@stop
