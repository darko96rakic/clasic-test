<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">
    <header class="row">
        @include('includes.navigation')
    </header>
    <div id="main" class="row">
        <div class=""></div>
        @yield('content')
    </div>
    <footer class="row">

    </footer>
</div>
</body>
</html>
