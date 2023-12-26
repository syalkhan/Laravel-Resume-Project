<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet'>
    <title>{{$title}}</title>
</head>

<body>
    <div class="container-fluid bg-dark">
        <div class="row">
            <div class="col-sm-2">
                @include('include.sidebar')
            </div>
            <div class="col-sm-10">
                {{$content}}
            </div>
        </div>
    </div>



    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('js/all.js')}}"></script>
</body>

</html>