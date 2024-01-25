@include('header')

<ul>
    @foreach ($series as $serie)
        <li><a href="{{ route("showSerie", ["id" => $serie->id]) }}">{{ $serie->title }}</a></li>
    @endforeach
</ul>

@include('footer');