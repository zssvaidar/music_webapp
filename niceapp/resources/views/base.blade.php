
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <title>Document</title>

        @if ($title =='index')
          <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        {{$title}}
         <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
          <link rel="stylesheet" href="{{asset('css/main.css')}}">
          <link rel="stylesheet" href="{{asset('css/navigation.css')}}">
          <link rel="stylesheet" href="{{asset('css/content-table.css')}}">
          <link rel="stylesheet" href="{{asset('css/content.css')}}">
          <link rel="stylesheet" href="{{asset('css/service.css')}}">
          <link rel="stylesheet" href="{{asset('css/footer.css')}}">
          <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        @endif


    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body >

    <!-- <div class="container"> -->
      <!-- @include('nav') -->
      @yield('content')
  <!-- </div> -->
  </body>

</html>
