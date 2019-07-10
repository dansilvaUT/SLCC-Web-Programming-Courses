<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome to Alliance Larp Utah</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/e571a0dc0d.js"></script>
    <link rel="stylesheet" type="text/css" href="Css/business-casual.css">
 <script>
            $(document).ready(function()
            {
                var number = 0;

                if($(window).width() <= 900)
                {
                    $("#welcomeTag").hide();
                    $("#greeting").attr("style", "font-size: 20px; font-weight: bold; object-position: center;");
                    $("#welcomeLandscape").prepend("<div class='bg-faded rounded p-4' \n\
                        <h2 class='section-heading mb-4'> \n\
                        <span class='text-uppercase' id='greeting'\n\
                        style='font-size: 20px; font-style: normal; \n\
                        font-weight: 100;'>\n\
                            Welcome fellow traveler</span> \n\
                        </h2> </div>");
                }



                $(document).scrollTop(0);

                $(document).scroll(function(){
                    if($(document).scrollTop() > 2 && number == 0)
                    {
                        $("#forestright").animate({left: "-=300px"}, 4000) &&
                        $("#forest").animate({left: "0px"}, 4000);
                        $("#cabinLandscape").fadeIn(2000);
                        number++;
                    }
                });
            });
        </script>
        <style>
            #NoOverFlow
            {
                overflow-x: hidden;
            }

            #cabinLandscape
            {
                display: none;
            }

            .pointer
            {
                cursor: pointer;
            }

            #forest {
                animation: mymove 2s;
            }

            .containThis
            {
                position: relative;
            }

            .animate
            {
                position: absolute;
            }
        </style>
  </head>

  <body>

        <h1 class="site-heading text-center text-white d-none d-lg-block">
            <span class="site-heading-upper text-primary mb-3">Welcome to Alliance Larp Utah</span>
            <span class="site-heading-lower">A Prince's Calling</span>
        </h1>

        <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Alliance Larp Utah</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.php">
                <i class="fa fa-home"> </i>Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="about.php">About</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="contact.php">
                Contact Us</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="products.php">
                <i class="fa fa-currency"></i>Shop/Donate</a>
            </li>
            <li class="nav-item  px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="resources.php">
                <i class="fa fa-currency"></i>Resources</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>