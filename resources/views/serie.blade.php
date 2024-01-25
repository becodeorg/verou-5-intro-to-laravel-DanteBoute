@include('header');

<h1>{{ $serie->title }}</h1>
<p><strong>Exerpt:</strong> {{ $serie->exerpt }}</p>
<p><strong>Body:</strong> {{ $serie->body }}</p>
<p><strong>Creator:</strong> {{ $serie->creator }}</p>
<p><strong>Actors:</strong></p>

@include('footer');