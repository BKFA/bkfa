<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>BKFA.COM | @yield('title')</title>
    <base href="{{asset('')}}">
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Global Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="library/bower_components/bootstrap/dist/css/bootstrap.min.css" />
    <link href="library/css/font-awesome.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/animate/animate.min.css"> -->
    <link rel="stylesheet" href="library/css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="library/css/owl-carousel/owl.theme.default.min.css">
    <!--  css -->
    <link rel="stylesheet" href="css/trangchu.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/document.css">
    <link rel="stylesheet" href="css/news_most.css">
    <link rel="stylesheet" href="css/services.css">
    <link rel="stylesheet" href="css/footer.css">
   <!--  css pages -->
    <link rel="stylesheet" href="css/pages/news.css">
     <link rel="stylesheet" href="css/pages/list_news.css">
    <link rel="stylesheet" href="css/pages/dstailieu.css">
    <link rel="stylesheet" href="css/pages/chitiettailieu.css">
    <link rel="stylesheet" href="css/pages/kienthuc.css">
</head>

<body id="page-top">
    @include('pages.layouts.header')
    @include('pages.layouts.login')

    @yield('content')

    @include('pages.layouts.footer')

    <!--Global JavaScript -->
    <script src="library/js/jquery/jquery.min.js"></script>
    <script src="library/bower_components/popper/popper.min.js"></script>
    <script src="library/js/bootstrap/bootstrap.min.js"></script>
    <script src="library/bower_components/wow/wow.min.js"></script>
    <script src="library/bower_components/owl-carousel/owl.carousel.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="library/bower_components/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
    function click_vi() {
        document.getElementById("language").innerHTML = "<img src='img/vi.png' alt='Việt Nam' title='Việt Nam'> Việt Nam";
    }

    function click_en() {
        document.getElementById("language").innerHTML = "<img src='img/en.png' alt='English' title='English'> English";
    }
    </script>
    @yield('script')
</body>

</html>