<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>
      <?= isset($title) ? $title : 'Blog de Jean Forteroche' ?>
    </title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="/">Blog de Jean Forteroche</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">À propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="post.html">Chapitres</a>
          </li>
          <?php if ($user->isAuthenticated()) { ?>
            <li class="btn-group nav-item"> 
            <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="">Action(s)<span class="caret"></span></a>
            <ul class="dropdown-menu dropdown-menu-right">
            <li class="nav-item"> <a class="nav-link" href="/admin/logout.html"><i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>
            <li class="nav-item"> <a class="nav-link" href="/admin/"><i class="fas fa-tools"></i> Administration</a></li>
            </ul>
            </li>
          <?php } else { ?>
          <li class="nav-item">
            <a class="nav-link" href="admin/">Connexion</a>
          </li>
        <?php } ?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div id="content-wrap">
        <section id="main">      
          <?= $content ?>
          <div class="modal" id="infos">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                    <?php if ($user->hasFlash()) echo '<p id="modal">', $user->getFlash(), '<button type="button" class="close" data-dismiss="modal">x</button></p>'; ?> 
                </div>
              </div>
            </div>
          </div>  
        </section>
      </div>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Cedricheim.fr 2019</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>
  <script src="js/pagination.js"></script>
  <script>
      let flash = $("#modal");
      if (flash.text() != "") {
        $('.modal').modal('show');
      }
    </script>
</body>

</html>