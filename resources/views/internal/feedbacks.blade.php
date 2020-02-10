@extends('layout')
@section('title' , 'Travelouge Tours| Feedback')
@include('internal.nav2')

@section('body')
    <!-- Testimonials -->
    <div class="testimonials agile-section" id="testimonials">
        <div class="container">
            <div class="shortcode_title shortcode-title-style_1"><h3 class="title_primary">feedbacks</h3><span class="line_after_title"></span></div>
            <div class="mis-stage">
                <!-- The element to select and apply miSlider to - the class is optional -->
                <ol class="mis-slider">
                    <!-- The slider element - the class is optional -->
                    <li class="mis-slide">
                        <!-- A slide element - the class is optional -->
                        <a href="#" class="mis-container">
                            <!-- A slide container - this element is optional, if absent the plugin adds it automatically -->
                            <figure>
                                <!-- Slide content - whatever you want -->
                                <img src="images/t1.jpg" alt=" " class="img-responsive" />
                                <figcaption>Carl Lii<span>Great Tour. Thanks Travelogue Tours</span></figcaption>
                            </figure>
                        </a> </li>
                    <li class="mis-slide"> <a href="#" class="mis-container">
                            <figure> <img src="images/t2.jpg" alt=" " class="img-responsive" />
                                <figcaption>Michael Paul<span>We took a 'Highlights of Sri Lanka' tour with Travelogue</span></figcaption>
                            </figure>
                        </a> </li>
                    <li class="mis-slide"> <a href="#" class="mis-container">
                            <figure> <img src="images/t3.jpg" alt=" " class="img-responsive" />
                                <figcaption>Henry Doe<span>Excellent Tour</span></figcaption>
                            </figure>
                        </a> </li>
                </ol>
            </div>

        </div>
    </div>
    <!-- /Testimonials-->

    <!-- testimonial-plugin -->
    <script src="js/mislider.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(function ($) {
            var slider = $('.mis-stage').miSlider({
                //  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
                stageHeight: 320,
                //  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
                slidesOnStage: false,
                //  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
                slidePosition: 'center',
                //  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
                slideStart: 'mid',
                //  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
                slideScaling: 150,
                //  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
                offsetV: -5,
                //  Center slide contents vertically - Boolean. Default: false
                centerV: true,
                //  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
                navButtonsOpacity: 1,
            });
        });
    </script>
    <!-- //testimonial-plugin -->
    @endsection
