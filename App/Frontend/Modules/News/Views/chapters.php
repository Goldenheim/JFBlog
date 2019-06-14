<!-- Page Header -->
  <header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Un billet pour l'Alaska</h1>
            <span class="subheading">Un roman de Jean Forteroche</span>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="col-lg-8 col-sm-10 container mx-auto">

    <h2>RETROUVEZ TOUS LES CHAPITRES DU ROMAN</h2>
    <br>
 
    <div class="row" id="content">
<?php
foreach ($listeAllNews as $news)
{
?>
      <div>
        <h2><a href="news-<?= $news['id'] ?>.html"><?= $news['titre'] ?></a></h2>
        <p><?= nl2br($news['contenu']) ?></p>
      </div>    
<?php
}
?> 
    </div>
    <div id="page_navigation" class="offset-md-5"></div>
  </div>