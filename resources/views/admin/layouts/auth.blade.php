<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>@yield('title') </title>

    <meta name="description" content="Créer un compte">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="">
    <meta property="og:site_name" content="Event">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{asset('src/media/favicons/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('src/media/favicons/favicon-192x192.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('src/media/favicons/apple-touch-icon-180x180.png')}}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and OneUI framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="{{asset('src/css/oneui.min.css')}}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="src/css/themes/amethyst.min.css"> -->
    <!-- END Stylesheets -->
</head>

<body>

    <!-- Main Container -->

        <!-- Page Content -->
        @yield('content')
        <!-- END Page Content -->


    <!-- END Main Container -->
<!-- END Page Container -->
</body>
<!-- jQuery -->   
<script src="{{asset('src/js/core/jquery.min.js')}}"></script>
<!-- Datemask -->   
<script src="{{asset('src/js/plugins/input-mask/jquery.inputmask.js')}}"></script>
<script src="{{asset('src/js/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script>
$(function () {
    //Datemask jj/mm/AAAA
    $("[data-mask]").inputmask("dd/mm/yyyy", {"placeholder": "jj/mm/aaaa"});
    //Initialize Select2 Elements
    $(".select2").select2();
});
</script> 
</html>

