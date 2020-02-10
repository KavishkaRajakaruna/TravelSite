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
                    <input type="text" class="name" name="name" placeholder="Tour Package Name" required="">
                    <input type="text" class="name" name="name" placeholder="Locations" required="">
                    <input type="email" class="name" name="name" placeholder="No of Pax" required="">
                    <input type="text" class="name" name="name" placeholder="Vehicle Type" required="">
                    <input type="text" class="name" name="name" placeholder="Arrival Date" required="">
                    <input type="text" class="name" name="name" placeholder="Departure Date" required="">
                    <textarea placeholder="Your Message" required=""></textarea>
                </form>
            </div>
            <div class="contact-right-w3l">
                <div class="clearfix"></div>
                <h4>User Details</h4>
                <form action="#" method="post">
                    <input type="text" class="name" name="name" placeholder="First  Name" required="">
                    <input type="text" class="name" name="name" placeholder="Last Name"  required="">
                    <input type="email" class="name" name="name" placeholder="Passport/ NIC" required="">
                    <input type="text" class="name" name="name" placeholder="Country" required="">
                    <input type="text" class="name" name="name" placeholder="Contact Number" required="">
                    <input type="text" class="name" name="name" placeholder="Email" required="">
                    <input type="submit" value="Book Now">
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //contact -->
    @endsection
