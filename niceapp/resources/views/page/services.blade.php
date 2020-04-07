@extends('base')

@section('content')
  @if(count($services) > 0)
  <ul>
    @foreach ($services as $service)
      <li>
        {{$service}}
      </li>
    @endforeach

  </ul>
  @endif
@endsection
