<h1>Supercattivi</h1>
<ul>
  @foreach ($villains as $villain)
    <li>{{$villain['name']}}</li>
  @endforeach
</ul>

<a href="{{asset('characters')}}">Torna indetro</a>
