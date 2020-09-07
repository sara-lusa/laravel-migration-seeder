<h1>Supereroi</h1>
<ul>
  @foreach ($heroes as $hero)
    <li>{{$hero['name']}}</li>
  @endforeach
</ul>

<a href="{{asset('characters')}}">Torna indetro</a>
