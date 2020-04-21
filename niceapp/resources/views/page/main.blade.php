@extends('base')

@section('content')
  <h4>nice app</h4>
  @guest
    Nice guest

  @else

    {{ Auth::user()->name }}
    <div class="">
        {!! Form::open(['action' => 'ProfilerController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
          {{ Form::label('title', 'Title') }}
          {{ Form::text('title', '', ['placeholder' => 'Title' ]) }}
          {{ Form::text('body', '', ['placeholder' => 'Body' ]) }}
          {{ Form::file('myfile') }}
          <br>
          {{ Form::submit('Submit') }}
        {!! Form::close() !!}

    </div>


    <div class="">
      @if(count($services) > 0)
      <ul>
        @foreach ($services as $service)
          <li>
            {{$service}}

          </li>
        @endforeach

      </ul>
      @endif
    </div>
  @endguest

@endsection
