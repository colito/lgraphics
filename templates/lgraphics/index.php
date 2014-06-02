<!DOCTYPE HTML>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>

    <!-- Base path: Very important especially when the systems uses clean URLs -->
    {base-url}

    <title>{page-title}</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">

    <link rel="icon" type="image/png" href="{favicon}">

    <!-- CSS Libraries -->

    <!--{templata:css}-->

    <link rel="stylesheet" href="{template-res:css:normalize.css}" type="text/css" media="screen">
    <link rel="stylesheet" href="{template-res:css:grid.css}" type="text/css" media="screen">
    <link rel="stylesheet" href="{template-res:css:style.css}" type='text/css' media="screen">

    <script type="text/javascript" src="{template:res}/js/masonry.pkgd.min.js"></script>

    <!-- JQuery -->
    {templata:jquery}

    <!-- Header files -->
    {header-files}

    <!-- GA -->
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-38880588-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>

</head>

<body {templata:right-click}>

<div id="topper">

    <div id="logo">
        <a href="" class="logo"><img src="{templata:images}/loni/Logo.png"></a>
    </div>

    <div id="switch"></div>

    <div id="navigation">
        {navi:desktop}
    </div>

</div>

<div id="panel">
    {navi:mobile}
</div>

<div class="container_12 clearfix">
    {body-content}
</div>

<div id='footer'>
    <div id='copyright' class="center">
        <p>&copy; Copyright 2014</p>
    </div>

    <div class="container_12 info">
        <div class="grid_4 omega suffix_4">
            <u>Phone</u> <br>
            +27(0)71 0628 057 <br>
            +27(0)74 6779 768 <br><br>

            <u>Email</u> <br>
            info@loni.co.za <br>
            lonigraphics@gmail.com <br><br>

            <u>Address</u> <br>
            Hatfield, Pretoria, South Africa
        </div>

        <div class="grid_4">
            Follow me on...<br>
            <a href="http://lonigraphics.tumblr.com/"><img src="{templata:images}/loni/Tumblr.png"></a> &nbsp;
            <a href="http://behance.net/lonigraphics"><img src="{templata:images}/loni/Behance.png"></a> &nbsp;
        </div>
    </div>
</div>

<script type="text/javascript" src="{template:res}/js/flexslider.js"></script>
<script type="text/javascript" charset="utf-8">
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            easing: "string",
            slideshowSpeed: 7000,
            animationSpeed: 850
        });
    });
</script>

</body>
<!-- Menu toggle for smart phones -->
<script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
        $("#switch").click(function(){
            $("#panel").slideToggle(250);
        });
    });
</script>
</html>