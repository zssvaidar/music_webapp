
<!DOCTYPE html>
<html lang="en">

  <head>
    
    <meta charset="UTF-8">
    {{-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> --}}
    {{-- <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"> --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Document</title>

      @if ($title ?? '' =='index')
        {{$title ?? ''}}
        @endif

      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" >
   
  </head>
  
  <body >

    @include('navbar')
    
    @include('partials.login')
    @include('partials.register')

    @yield('content')

    @include('footer')
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script>

    $('#registerModal').on('show.bs.modal	', function () {
        console.log('login model is hidden');
        $("#loginModal").modal("hide");

        console.log('register model is shown');
      $('#loginModal').trigger('hide')
    })

    var playing = false;
      var idx = -1;
     
      var sites = {!! json_encode($services ) !!};
      
    
      function updatePlayer(id) {
     
        console.log(id, playing);
        var myMusic= document.getElementById("playermusic");
      var myMusicsrc= document.getElementById("musicsrc");
        if(id==idx&& playing==false)
        {
          myMusic.play();
          playing=true;
        }
        else
          if(playing && idx==id)
          {
            myMusic.pause();
            playing=false;
          } else
            if(idx!=id)
            {
              for (i = 0; i < sites.length; i++) 
                if(sites[i].id == id)
                {
                  idx=id;
                  playing=true;
                
                  myMusicsrc.src = "https://storagemusicapp.blob.core.windows.net/musicstorage/" + sites[i].url;
                  myMusic.load();
                  myMusic.play();
                  break;
                }
              }
      }
      
    </script>

  </body>

</html>
