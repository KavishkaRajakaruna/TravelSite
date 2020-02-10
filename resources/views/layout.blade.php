<html>
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //custom-theme -->
    <script type="text/javascript" src= "{{url('js/jquery-2.2.3.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/bootstrap.js')}}"></script>
    <!-- stylesheet -->
    <link href=  "{{url('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{url('css/mislider.css')}}" rel="stylesheet" type="text/css" /><!--team-->
    <link href="{{url('css/mislider-custom.css')}}" rel="stylesheet" type="text/css" /><!--team-->
    <!-- light-box -->
    <link rel="stylesheet" href={{url('css/lightbox.css')}}>
    <!-- //light-box -->
    <link href="{{url('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- //stylesheet -->
    <!-- online fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
    <!-- //online fonts -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" type="text/css" rel="stylesheet">
    <!-- //font-awesome-icons -->
</head>
<body>
@yield('nav')
@yield('body')
@include('internal.footer')
<script src="js/lightbox-plus-jquery.min.js"> </script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smooth-scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: false,
            pager:true,
            nav:false,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
</body>
</html>
