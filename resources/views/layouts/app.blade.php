<!DOCTYPE html>
<html lang="en">
<head>
    
    @include('subs.header')

    <style>
        html, body {
            overflow-x: hidden;
            background: rgb(20, 19, 19);
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        
        #wrapper {
          min-height: 100%;
          position: relative;
        }
        #wrapper #content {
          padding-bottom: 100px;
        }
    </style>

    <title>@yield('title')</title>

</head>
<body>

    <div id="wrapper">
        @stack('styles')
  
        @include('subs.menu')
  
        <div id="content">
          @yield('content')
        </div>
  
        @include('subs.footer')
  
        @stack('scripts')
    </div>
    
</body>
</html>