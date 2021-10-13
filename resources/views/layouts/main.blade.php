<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC Comics| @yield('title')</title>

    @yield('cdns')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>

<body>
    @include('includes.header')


    <main class="container-fluid ">
        <section class="jumbotron">

        </section>

        <section class="" id="@yield('section_id')">

            @yield('content')

        </section>
    </main>




    @yield('scripts')
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>