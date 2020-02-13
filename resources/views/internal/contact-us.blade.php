@extends('layout')
@section('title' , 'Travelouge Tours| Contact-Us')
@include('internal.nav2')

@section('body')
    <!-- contact -->
    <div class="w3ls-contact agile-section" id="contact">
        <div class="container">
            <div class="shortcode_title shortcode-title-style_1"><h3 class="title_primary">Contact Us</h3><span class="line_after_title"></span></div>
            <div class="agile-contact text-center">
                <h5><i class="fa fa-phone fa-fw"></i>(+94) 77 770 7777</h5>
            </div>
            <div class="contact-right-w3l">
                <ul class="contact-info">
                    <li><i class="fa fa-map-marker"></i>Travelogue Tours, Colombo, Sri Lanka.</li>
                    <li><i class="fa fa-envelope"></i><a href="mailto:info@traveloguetours.com">info@traveloguetours.com</a></li>
                    <li><i class="fa fa-print"></i>(+94) 77 770 7777</li>

                </ul>
                <div class="wthree-contact-form-bg"></div>
                <div class="clearfix"></div>
                <h4>have a question?</h4>
                <form action="contact-us" method="post">
                    <input type="text" class="name" name="first_name" placeholder="First Name" required="">
                    <input type="text" class="name" name="last_name" placeholder="Last Name" required="">
                    <input type="email" class="name" name="email" placeholder="Email" required="">
                    <input type="text" class="name" name="subject" placeholder="Subject" required="">
                    <textarea placeholder="Your Message"  name="message"></textarea>
                    <input type="submit" value="SEND MESSAGE">
                    @csrf

                </form>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //contact -->
@endsection
