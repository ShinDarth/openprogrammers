<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Realizzazione Siti Web">
    <meta name="author" content="Francesco e Stefano Borzì">
    <link rel="shortcut icon" href="favicon.ico">

    <title>OpenProgrammers.it</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="hidden-sm navbar-brand" href="home.php">OpenProgrammers.it</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav  navbar-right">
            <li><a href="home.php">Home</a></li>
            <li><a href="chisiamo.php">Chi siamo</a></li>
            <li><a href="webdesign.php">WebDesign</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Software<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">Francesco Borzì</li>
                <li><a target="_blank" href="https://github.com/ShinDarth"><img class="hidden-xs" src="images/GitHub-Mark-32px.png" width="20px"> ShinDarth</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Stefano Borzì</li>
                <li><a target="_blank" href="https://github.com/Helias"><img class="hidden-xs" src="images/GitHub-Mark-32px.png" width="20px"> Helias</a></li>
              </ul>
            </li>
            <?php include_once("progetti.php") ?>
            <li><a href="http://shinworld.altervista.org">Blog</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">GNU Linux<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">Dal nostro blog</li>
                <li><a target="_blank" href="http://shinworld.altervista.org/wordpress/come-formattare-il-proprio-pc-installando-linux/">Come formattare il proprio PC installando Linux</a></li>
                <li><a target="_blank" href="http://shinworld.altervista.org/wordpress/usare-linux-e-veramente-piu-difficile-rispetto-a-windows-8-motivi-dimostrano-il-contrario/">Usare Linux è più difficile rispetto a Windows?</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Dal web</li>
                <li><a target="_blank" href="https://www.gnu.org/">Cosa sono GNU e il Software Libero?</a></li>
                <li><a target="_blank" href="http://wiki.ubuntu-it.org/Sicurezza/Malware">Sicurezza dei sistemi operativi GNU/Linux</a></li>
              </ul>
            </li>
            <li><a href="contatti.php">Contatti</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container content text-center">



    </div><!-- /.container -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script type="text/javascript">
      //carousel
      $(document).ready(function() {
        $(".carousel").owlCarousel({
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true,
          autoPlay: true
        });
      });
    </script>

  </body>
</html>
