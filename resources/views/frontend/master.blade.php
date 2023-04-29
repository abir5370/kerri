<!DOCTYPE html>
<html>

<!-- Mirrored from kerrilive.netlify.app/light/index_1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Feb 2023 19:23:26 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kerri | Responsive Bootstrap 5 Personal Template</title>
    <meta name="description" content="Premium Responsive Bootstrap 5 Personal Template" />
    <meta name="keywords" content="bootstrap 5, premium, cv, personal, Portfolio, multipurpose" />
    <meta name="author" content="SRBThemes" />

    <link rel="shortcut icon" href="{{asset('frontend/images/favicon.ico')}}">

    <!-- Bootstrap Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">

    <!-- Materialdesign icons Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/materialdesignicons.min.css')}}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/owl.carousel.min.css')}}">

    <!-- Animate Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/animate.min.css')}}">

    <!-- Magnific-popup -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/magnific-popup.css')}}">

    <!-- Mobirise icons Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/mobiriseicons.css')}}">

    <!-- Custom Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/color/default.css')}}" id="option-color">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">Loading...</div>
    </div>
</div>

<!-- Start Navbar -->
@include('frontend.include.header')
<!-- End Navbar -->


@yield('content')

<!--START FOOTER-->
@include('frontend.include.footer')
<!--END FOOTER-->


<!-- Back To Top -->
<a href="#" class="back_top"> <i class="mdi mdi-chevron-up"> </i> </a>

<!-- START SWITCHER -->
<div id="color-switcher" style="left: 0px;">
    <div>
        <h3 class="fw-bold text-center">Select your color</h3>
        <ul class="pattern">
            <li>
                <a class="color1" href="#"></a>
            </li>
            <li>
                <a class="color2" href="#"></a>
            </li>
            <li>
                <a class="color3" href="#"></a>
            </li>
            <li>
                <a class="color4" href="#"></a>
            </li>
            <li>
                <a class="color5" href="#"></a>
            </li>
            <li>
                <a class="color6" href="#"></a>
            </li>
        </ul>
    </div>
    <div class="bottom">
        <a href="#" class="settings rounded-right"><i class="mdi mdi-settings mdi-spin"></i></a>
    </div>
</div>
<!-- END SWITCHER -->


<!--All Javascript -->
<script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.min.js')}}"></script>

<!-- Text Type -->
<script src="{{asset('frontend/js/typed.js')}}"></script>

<!-- Owl Carousel -->
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>

<!-- Switcher Js -->
<script src="{{asset('frontend/js/switcher.js')}}"></script>

<!-- Work Filter -->
<script src="{{asset('frontend/js/isotope.js')}}"></script>

<!-- Magnific Popup Js -->
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Custom Js -->
<script src="{{asset('frontend/js/custom.js')}}"></script>
@php
    $banner = \App\Models\Banner::where('status',1)->get();
@endphp
<script>
    var typed = new Typed('.element', {
        strings: ["Kerri Deo.", "{{$banner->first()->header_name}}.", "A Photographer."],
        typeSpeed: 120,
        backSpeed: 60,
        backDelay: 3000,
        loop: true
    });
</script>
</body>

<!-- Mirrored from kerrilive.netlify.app/light/index_1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Feb 2023 19:23:42 GMT -->

</html>
