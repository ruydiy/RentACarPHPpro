@extends('layout')

@section('content')
    <header style="max-width:1500px; margin-top:60px" class="w3-display-container w3-content w3-wide" id="home">
        <div class="w3-display-middle w3-margin-top w3-center">
            <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>RUYDIY</b></span> <span class="w3-hide-small w3-text-yellow">Hit the road</span></h1>
        </div>
    </header>


    <div class="w3-container w3-padding-32" id="projects">
        <h3 style="color:orange; font-family: Verdana;" class="w3-border-bottom w3-border-light-grey w3-padding-16">Drive</h3>
    </div>

    <div class="w3-row-padding">
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">Ford Mustang</div>
                <img src="images/ford.jpg" alt="Ford Mustang" style="width: 100%">
            </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">Nissan skyline</div>
                <img src="images/nissan.jpg" alt="House" style="width:100%">
            </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">Audi rs8</div>
                <img src="images/audi.jpg" alt="Audi rs8" style="width:100%">
            </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">BMW 4</div>
                <img src="images/bmw.jpg" alt="bmw 4" style="width:100%">
            </div>
        </div>
    </div>

    <div class="w3-row-padding">
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">Toyota Supra</div>
                <img src="/images/supra.jpg" alt="Toyota Supra" style="width:99%">
            </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">BMW e30</div>
                <img src="/images/e30.jpg" alt="BMW e30" style="width:99%">
            </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">mercedes g </div>
                <img src="/images/merc.jpg" alt="mercedes g" style="width:99%">
            </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <div class="w3-display-container">
                <div class="w3-display-topleft w3-black w3-padding">lamborghini aventador</div>
                <img src="/images/lambo.jpg" alt="lamborghini aventador" style="width:99%">
            </div>
        </div>
    </div>
@endsection
