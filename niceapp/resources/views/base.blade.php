
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/navigation.css')}}">   
      @if ($title ?? '' =='index')
          <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        {{$title ?? ''}}
       
          <link rel="stylesheet" href="{{asset('css/content-table.css')}}">
          <link rel="stylesheet" href="{{asset('css/content.css')}}">
          <link rel="stylesheet" href="{{asset('css/service.css')}}">
          <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        @endif

    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
   
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

    </script>

  </body>

</html>
