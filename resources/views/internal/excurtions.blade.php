@extends('layout')
@section('title' , 'Travelouge Tours| Excurtions')
@include('internal.nav2')
@section('body')
    <!-- contact -->
    <div class="w3ls-contact agile-section" id="contact">
        <div class="container">
            <div class="shortcode_title shortcode-title-style_1"><h3 class="title_primary">Excursion Report</h3><span class="line_after_title"></span></div>
            <div class="contact-right-w3l">
                <div class="clearfix"></div>
                <h4>Package Details</h4>
                <form action="#" method="post">
                    <input type="text" class="name" name="package" placeholder="Tour Package Name" required="">
                    <input type="text" class="name" name="location" placeholder="Locations" required="">
                    <input type="text" class="name" name="packs" placeholder="No of Pax" required="">
                    <input type="text" class="name" name="vehicle" placeholder="Vehicle Type" required="">
                    <input type="date" class="name " name="arrival"  required="" >
                    <input type="date" class="name " name="departure" required="" >
                    <textarea placeholder="Your Message" name="message"></textarea>
                    @csrf

            </div>
            <div class="contact-right-w3l">
                <div class="clearfix"></div>
                <h4>User Details</h4>
                <form action="#" method="post">
                    <input type="text" class="name" name="first_name" placeholder="First  Name" required="">
                    <input type="text" class="name" name="last_name" placeholder="Last Name"  required="">
                    <input type="text" class="name" name="passport" placeholder="Passport/ NIC" required="">
                    <input type="text" class="name" name="country" placeholder="Country" required="">
                    <input type="text" class="name" name="number" placeholder="Contact Number" required="">
                    <input type="text" class="name" name="email" placeholder="Email" required="">
                    <input type="submit" value="Book Now">
                    @csrf
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //contact -->
    @endsection
