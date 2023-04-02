<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>

<body>

    @include('layouts.partials.nav')

    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#lan-option').change(function(){
                // alert('hello')
                window.location.href = `/locale/${$(this).val()}`;
            })
        });
    </script>
</body>

</html>
