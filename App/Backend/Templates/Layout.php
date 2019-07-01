<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="/img/cropped-favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        <?= isset($title) ? $title : 'Blog de Jean Forteroche' ?>
      </title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Custom styles for this template -->
    <link href="/css/clean-blog.css" rel="stylesheet">

  </head>
 
  <body>
      <?php if ($user->isAuthenticated()) { ?>
      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
          <a class="navbar-brand" href="/"><i class="fas fa-undo-alt"></i> Retour au blog</a>
          <?php if (isset($nombreReport))
                 echo '<i class="fas fa-comment-alt notify"><a data-toggle="modal" href="#infos"><span  class="badge badge-danger badge-notify">' . $nombreReport . '</span></a></i>' ?>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="/admin/"><i class="fas fa-home"></i> Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/admin/news-insert.html">Ajouter un article</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/admin/logout.html"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <?php } else { ?>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
          <div class="container">
            <a class="navbar-brand" href="/">Retour au blog</a>
            </div>
          </div>
        </nav>
        <header class="masthead" style="background-image: url('/img/login-bg.jpg')">
          <div class="overlay"></div>
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-md-10 mx-auto">
                <div class="site-heading">
                  <h1>Connexion</h1>
                  <span class="subheading">Espace d'administration</span>
                </div>
              </div>
            </div>
          </div>
        </header>
      <?php } ?>
 
      <div id="content-wrap" class="col-lg-12 col-md-10 mx-auto">
        <section id="main">
          <br>
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
          <div class="modal" id="badge">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                      <?php echo '<a class="nav-link mx-auto" href="report.html" id="badge">' . $nombreReport .' commentaire(s) signalé(s)</a>'; ?> 
                    </div>
                </div>
              </div>
            </div>
          </div>         
        </section>
      </div>

      <!-- Footer -->
        <hr>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>     
    <script src="https://cdn.tiny.cloud/1/h65p3hjp48q4mpytx1k442wdyfni394z41fwpaggb67jg9f7/tinymce/5/tinymce.min.js"></script>  
    <script src="/js/pagination.js"></script>
    <script src="/js/tinymce/tinymce.js"></script>  
    <script src="/js/tinymce/langs/fr_FR.js"></script>  
    <script>
      let flash = $("#modal");
      if (flash.text() != "") {
        $('#infos').modal('show');
      }

      $('.badge').click(e => {
        $('.modal').modal('show');
      });
      $(document).ready(function(){
        $('.toast').toast('show');
      });
      $(document).ready(function(){
        $("#search").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("table tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });
    </script>
  </body>
</html>