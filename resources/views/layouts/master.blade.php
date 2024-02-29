<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    {{-- <meta name="csrf-token" content="{{csrf_token()}}"> --}}
    <link href="/css/build.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hurricane&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        @media(max-width:768px) {
            .flex-container {
                flex-direction: column;
            }

            .fulwidth {
                width: 100%;
            }

            .fulheight {
                height: 100%;
            }
        }
    </style>
    @stack('cssjsexternal')
    <title>PinMe</title>
</head>

<body>


   @include('include.navbar')
   @yield('content')
   <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
@stack('footerjsexternal')
</html>
