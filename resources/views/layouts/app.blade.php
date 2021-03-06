<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Bulletin Board</title>
  <script src="{{ asset('js/app.js') }}" defer></script>
 <link rel="stylesheet" href="{!!asset('/css/bootstrap.min.css')!!}">
  <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
  


  <style>
    /* change Password */
    .pass_show{position: relative} 

    .pass_show .ptxt { 

    position: absolute; 

    top: 50%; 

    right: 10px; 

    z-index: 1; 

    color: #f36c01; 

    margin-top: -10px; 

    cursor: pointer; 

    transition: .3s ease all; 

    } 

    .pass_show .ptxt:hover{color: #333333;}
  </style>
</head>

<body>
  <div id="app">
    @include('header')
    <main class="py-4">
      @yield('content')
    </main>
  </div>

  <script src="{!!asset('/js/jquery-3.6.0.min.js')!!}"></script>
  <script src="{!!asset('/js/bootstrap.min.js')!!}"></script>
  <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

  <script src="https://kit.fontawesome.com/1434eaa1d1.js" crossorigin="anonymous"></script>
  
  <script src="{{ asset('css/app.css') }}" defer></script>

</body>
<script>
    $(document).ready(function(){
      $('.pass_show').append('<span class="ptxt">Show</span>');  
      });
        
      
      $(document).on('click','.pass_show .ptxt', function(){ 
      
      $(this).text($(this).text() == "Show" ? "Hide" : "Show"); 
      
      $(this).prev().attr('type', function(index, attr){return attr == 'password' ? 'text' : 'password'; }); 
      
  }); 
</script>
</html>
