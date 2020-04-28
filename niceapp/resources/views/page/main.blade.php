@extends('base')

@section('content')
  <h4>nice app</h4>
  @guest
    Nice guest

  @else

    {{ Auth::user()->name }}
    
    <div style="margin-top: 200px">
        {!! Form::open(['action' => 'ProfilerController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
          {{ Form::label('title', 'Title') }}
          {{ Form::text('title', '', ['placeholder' => 'Title' ]) }}
          {{ Form::text('body', '', ['placeholder' => 'Body' ]) }}

          {{Form::open(array('files'=>'true'))}}
          {{ Form::file('myfile') }}
          <br>
          {{ Form::submit('Submit') }}
        {!! Form::close() !!}

    </div>

    <script>    
    
  </script>

    <div>
      @foreach ($services as $service)
        <audio id='playermusic' controls="controls">
          <source id='musicsrc' src="https://storagemusicapp.blob.core.windows.net/musicstorage/{{$service->url}}" type="audio/mpeg" />
        </audio>
        @if($service->url)
          @break
        @endif
      @endforeach


      @if(count($services) > 0)
      <ul>
        @foreach ($services as $service)
          <li>
            <a onclick='return updatePlayer({{$service->id}})'>play</a>
            <a  href="{{ route('downloadF', $service->id) }}" title="MyPdf">Download</a>
        
            {{$service->body}}
            {{$service->myfile}}

          </li>
        @endforeach

      </ul>
      @endif 
    </div>
  @endguest

@endsection
