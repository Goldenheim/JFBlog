<!-- Page Header -->
  <header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-sm-10 mx-auto">
          <div class="site-heading">
            <h1>JEAN FORTEROCHE: <br>Blog officiel</h1>
            <span class="subheading">Toute l'actualité de l'écrivain</span>
          </div>
        </div>
      </div>
    </div>
  </header>
  <?php
  foreach ($listeNews as $news)
  {
  ?>
  <div class="col-lg-8 col-sm-12 mx-auto">
    <h2><a href="news-<?= $news['id'] ?>.html"><?= $news['titre'] ?></a></h2>
    <p><?= nl2br($news['contenu']) ?></p>
  </div>
<?php
}
?>

<div class="container">
  <div class="row">
    <span class="mx-auto">
      <a class="nav-link" href="/post.html">Tous les chapitres <i class="far fa-arrow-alt-circle-right"></i></a>
    </span>
  </div>
</div>
