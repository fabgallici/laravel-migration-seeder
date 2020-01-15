@extends ('layouts.layout')

@section('content')
  <ol>
  @foreach($movies as $movie)
    <li>
      <ul>
        <li>{{ $movie->title }}</li>
        <li>{{ $movie->year }}</li>
        <li>{{ $movie->overview }}</li>
        <li>{{ $movie->created_at }}</li>
        <li>{{ $movie->updated_at }}</li>      
      </ul>
    </li>
    <br>
  @endforeach
  </ol>
@endsection