<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>СИСТЕМА УСКОРЕНИЯ ДОКУМЕНТАОБОРОТА цены</title>

    <!-- animation -->
    <link rel="stylesheet" type="text/css" href="css/animations.css" />

    <link rel="stylesheet" type="text/css" href="css/ihover.css" />

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="responsive.css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- header start -->
    <header class="shr-header">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="index.html"><img class="shr-logo" src="images/logo/logo.png" alt="" />
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li>
                            <a class="page-scroll cmn-t-underline" href="/index.php">Главная</a>
                        </li>
                        <li>
                            <a class="page-scroll cmn-t-underline" href="/price.php">Цена</a>
                        </li>
                        <li>
                            <a class="page-scroll cmn-t-underline" href="#">Контакты</a>
                        </li>

                        <li>
                            <a class="page-scroll cmn-t-underline" style="color: #a0ce4e" href="/login.php" role="button">Войти в систему</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
    </header>
    <!-- header end -->

    <!-- hero start -->
    <section class="shr-hero-area" id="hero">
        <div class="container">
            <div class="row animatedParent animateOnce">
                <div class="col-lg-6 col-md-6 col-sm-6">

                    <p>
                        Стандартная ставка за использование "Системы ускорения документа оборота" составляет - 250 BYN / Месяц для одной организации. <br>

                    </p>
                    <a class="btn btn-default" href="#" role="button">Оставить заявку на подключение</a>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 shr-dis-none">
                    <div class="shr-hero-content-img animated fadeInUpShort slow delay-250" style="display: flex; justify-content: end">
                        <img class="hand" src="images/others/price.png" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero end -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/css3-animate-it.js"></script>
    <!-- css3-animate-it -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- menu smooth scroll -->
    <script type="text/javascript" src="js/scroll_script.js"></script>
    <!-- to top smooth scroll -->

    <!-- menu -->
    <script type="text/javascript">
        //jQuery to collapse the navbar on scroll
        $(window).scroll(function() {
            if ($(".navbar").offset().top > 50) {
                $(".navbar-fixed-top").addClass("top-nav-collapse");
            } else {
                $(".navbar-fixed-top").removeClass("top-nav-collapse");
            }
        });

        //jQuery for page scrolling feature - requires jQuery Easing plugin
        $(function() {
            $("a.page-scroll").bind("click", function(event) {
                var $anchor = $(this);
                $("html, body")
                    .stop()
                    .animate({
                            scrollTop: $($anchor.attr("href")).offset().top,
                        },
                        1500,
                        "easeInOutExpo"
                    );
                event.preventDefault();
            });
        });
    </script>
    <!-- /menu -->

    <!-- counter -->
    <script type="text/javascript">
        $(document).ready(function($) {
            $(".count").each(function() {
                var $this = $(this);
                $this.data("target", parseInt($this.html()));
                $this.data("counted", false);
                $this.html("0");
            });

            $(window)
                .bind("scroll", function() {
                    var speed = 3000;
                    $(".count").each(function() {
                        var $this = $(this);
                        if (
                            !$this.data("counted") &&
                            $(window).scrollTop() + $(window).height() >= $this.offset().top
                        ) {
                            $this.data("counted", true);
                            $this.animate({
                                dummy: 1
                            }, {
                                duration: speed,
                                step: function(now) {
                                    var $this = $(this);
                                    var val = Math.round($this.data("target") * now);
                                    $this.html(val);
                                    if (0 < $this.parent(".value").length) {
                                        $this.parent(".value").css("width", val + "%");
                                    }
                                },
                            });
                        }
                    });
                })
                .triggerHandler("scroll");
        });
    </script>
    <!-- /counter -->

    <!-- <a href="#top" id="toTop"><i class="fa fa-arrow-circle-up"></i></a>-->
</body>

</html>