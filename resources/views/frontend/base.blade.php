
<!DOCTYPE html>

<html>

<head>


        <title>Blog</title>
        <meta name="description" content="@yield('page_description', $page_description ?? '')"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="shortcut icon" href="{{ asset('media/logos/favicon.ico') }}" />

</head>

<body>

<div class="container">

   <header class="row">

   <p>include navbar here</p>

   </header>

   <div id="main" class="row">

           @yield('content')

   </div>

   <footer class="row">

   <p>include footer here</p>

   </footer>

</div>

</body>

</html>