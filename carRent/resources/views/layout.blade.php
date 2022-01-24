<!DOCTYPE html>
<html>
<title>Radoslav's website</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<body>
<div class="w3-collapse">
    <div style="" class="w3-bar w3-yellow w3-wide w3-padding w3-card">
        <a href="{{url('/')}}" class="w3-bar-item w3-button"><b>✪ruydiy</b></a>
        <!-- Float links to the right. Hide them on small screens -->
        <div class="w3-right w3-hide-small">
            <a href="{{url('/index')}}" class="w3-bar-item w3-button">All Cars</a>
            <a href="{{url('/show')}}" class="w3-bar-item w3-button">AdminCars</a>
            <a href="{{url('/search')}}" class="w3-bar-item w3-button">AdminSearch</a>
            <a href="{{url('/contact')}}" class="w3-bar-item w3-button">Contact☏</a>
        </div>
    </div>
</div>

@yield('content')

</body>

<footer class="w3-center w3-black w3-padding-16">
    <p>Created by <a href="https://www.facebook.com/" title="Radoslav" target="_blank" class="w3-hover-text-green">Radoslav Tsankov</a></p>
</footer>


</html>

