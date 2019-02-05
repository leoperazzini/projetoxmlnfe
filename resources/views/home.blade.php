 <html>
    <head>
        <title></title>

          @include('dependencias')
    
    </head>

    <body> 

          @yield('titulo')

          @include('menu') 
 
          <hr>

            <div class="container-fluid">

                 @yield('content') 
            </div> 
            
            @yield('script-js')

    </body>
 </html>
    
</head>
<body>
