<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" >
        <link rel="stylesheet" type="text/CSS" href="{{URL::to('assets/css/style.css')}}" >
        <link rel="stylesheet" href="{{URL::to('assets/css/all.css')}}">
        <link rel="stylesheet" href="{{URL::to('assets/css/bootstrap.css')}}">

        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <title>Le code</title>
    </head>
    <body>
        {{-- <div class="image">
            <img src="{{URL::to('assets/image/BMW.jpg')}}" alt="">
        </div> --}}
        @include("layouts.header")

            {{$slot}}

        @include("layouts.footer")
        <script src="{{URL::to('assets/js/main.js')}}"></script>
    </body>
</html>