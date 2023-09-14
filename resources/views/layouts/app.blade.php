<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from demo.graygrids.com/themes/jobgrids/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 May 2022 23:41:43 GMT -->
<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<title>JobGrids - Job Portal HTML Template.</title>
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.svg') }}" />


<link href="{{ asset('../../../fonts.googleapis.com/css2c948.css?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap') }}" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/LineIcons.2.0.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/glightbox.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
</head>
<body>
<!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->
<div id="loading-area"></div>


@extends('inc.header')

@yield('content')

@extends('inc.footer')













<a href="#" class="scroll-top btn-hover">
<i class="lni lni-chevron-up"></i>
</a>

<script data-cfasync="false" src="{{ asset('../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script><script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
<script src="{{ asset('assets/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script type="text/javascript">
        //====== Clients Logo Slider
        tns({
            container: '.client-logo-carousel',
            slideBy: 'page',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 15,
            nav: false,
            controls: false,
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 2,
                },
                768: {
                    items: 3,
                },
                992: {
                    items: 4,
                },
                1170: {
                    items: 6,
                }
            }
        });
        //========= testimonial 
        tns({
            container: '.testimonial-slider',
            items: 1,
            slideBy: 'page',
            autoplay: false,
            mouseDrag: true,
            gutter: 0,
            nav: false,
            controls: true,
            controlsText: ['<i class="lni lni-arrow-left"></i>', '<i class="lni lni-arrow-right"></i>'],
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 1,
                },
                768: {
                    items: 1,
                },
                992: {
                    items: 1,
                },
                1170: {
                    items: 1,
                }
            }
        });

        //========= glightbox
        GLightbox({
            'href': 'https://www.youtube.com/watch?v=cz4z8CyvDas',
            'type': 'video',
            'source': 'youtube', //vimeo, youtube or local
            'width': 900,
            'autoplayVideos': true,
        });
    </script>
</body>

<!-- Mirrored from demo.graygrids.com/themes/jobgrids/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 May 2022 23:42:58 GMT -->
</html>