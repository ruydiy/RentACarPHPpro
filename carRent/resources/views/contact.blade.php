@extends('layout')

@section('content')
    <div class="w3-container w3-padding-32" id="contact">
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
        <p>Send us your email, the car you would like to hire and information about dates you want it.</p>
        <p>We will send you information about next steps of rental service</p>
        <form action="/" target="_self">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="Email">
            <input class="w3-input w3-section w3-border" type="text" placeholder="Car you want" required name="car">
            <input class="w3-input w3-section w3-border" type="text" placeholder="Dates and place" required name="Inforamtion">
            <button class="w3-button w3-black w3-section" type="submit">
                <i class="fa fa-paper-plane"></i> SEND MESSAGE
            </button>
        </form>
    </div>
@endsection
