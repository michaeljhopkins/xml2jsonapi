<html>
<head>
    <title>Xml2JsonApi - By Michael Hopkins</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile support -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Twitter Bootstrap -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design for Bootstrap -->
    <link href="/assets/css/roboto.min.css" rel="stylesheet">
    <link href="/assets/css/material-fullpalette.css" rel="stylesheet">
    <link href="/assets/css/ripples.min.css" rel="stylesheet">

    <!-- Dropdown.js -->
    <link href="//cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.css" rel="stylesheet">

    <!-- Page style -->
    <link href="/assets/css/site.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
</head>
<body>
@yield('content')
        <!-- Open source code -->
<script>
    window.page = window.location.hash || "#about";

    $(document).ready(function () {
        if (window.page != "#about") {
            $(".menu").find("li[data-target=" + window.page + "]").trigger("click");
        }
    });

    $(window).on("resize", function () {
        $("html, body").height($(window).height());
        $(".main, .menu").height($(window).height() - $(".header-panel").outerHeight());
        $(".pages").height($(window).height());
    }).trigger("resize");

    $(".menu li").click(function () {
        // Menu
        if (!$(this).data("target")) return;
        if ($(this).is(".active")) return;
        $(".menu li").not($(this)).removeClass("active");
        $(".page").not(page).removeClass("active").hide();
        window.page = $(this).data("target");
        var page = $(window.page);
        window.location.hash = window.page;
        $(this).addClass("active");


        page.show();

        var totop = setInterval(function () {
            $(".pages").animate({scrollTop: 0}, 0);
        }, 1);

        setTimeout(function () {
            page.addClass("active");
            setTimeout(function () {
                clearInterval(totop);
            }, 1000);
        }, 100);
    });

    function cleanSource(html) {
        var lines = html.split(/\n/);

        lines.shift();
        lines.splice(-1, 1);

        var indentSize = lines[0].length - lines[0].trim().length,
                re = new RegExp(" {" + indentSize + "}");

        lines = lines.map(function (line) {
            if (line.match(re)) {
                line = line.substring(indentSize);
            }

            return line;
        });

        lines = lines.join("\n");

        return lines;
    }

    $("#opensource").click(function () {
        $.get(window.location.href, function (data) {
            var html = $(data).find(window.page).html();
            html = cleanSource(html);
            $("#source-modal pre").text(html);
            $("#source-modal").modal();
        });
    });
</script>

<!-- Twitter Bootstrap -->
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!-- Material Design for Bootstrap -->
<script src="/assets/js/material.js"></script>
<script src="/assets/js/ripples.min.js"></script>
<script>
    $.material.init();
</script>


<!-- Sliders -->
<script src="//cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>
<script>
    $(function () {
        $.material.init();
        $(".shor").noUiSlider({
            start: 40,
            connect: "lower",
            range: {
                min: 0,
                max: 100
            }
        });

        $(".svert").noUiSlider({
            orientation: "vertical",
            start: 40,
            connect: "lower",
            range: {
                min: 0,
                max: 100
            }
        });
    });
</script>

<!-- Dropdown.js -->
<script src="//cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.js"></script>
<script>
    $("#dropdown-menu select").dropdown();
</script>
</body>
</html>