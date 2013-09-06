<!doctype html>
<html ng-app="rabotahelp" ng-controller="MainCtrl">
<head>
    <meta charset="utf-8">
    <title>Онлайн-сервис "Успешное собеседование"</title>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="/public/fonts/stylesheet.css" rel="stylesheet">
    <link href="/public/normalize.css" rel="stylesheet">
    <link href="/public/style.css" rel="stylesheet">
    <link href="/public/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php echo $content ?>
    <script src="/public/js/angular.min.js"></script>
    <script src="/public/js/ui-bootstrap-custom-0.5.0.min.js"></script>
    <script src="/public/js/ui-bootstrap-custom-tpls-0.5.0.min.js"></script>
    <script src="/public/js/oi.file.js"></script>
    <script src="/public/js/app.js"></script>
    <!--[if lte IE 9]>
    <script src="/public/js/ie.placeholder.js"></script>
    <![endif]-->
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter21760138 = new Ya.Metrika({id:21760138,
                        webvisor:true,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true});
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="//mc.yandex.ru/watch/21760138" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</body>
</html>
