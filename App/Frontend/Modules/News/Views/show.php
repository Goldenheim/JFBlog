<!-- Page Header -->
  <header class="masthead" style="background-image: url('img/post-bg.jpg')">
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
<div class="col-lg-8 col-md-10 mx-auto">
<p>Par <em><?= $news['auteur'] ?></em>, le <?= $news['dateAjout']->format('d/m/Y à H\hi') ?></p>
<h2><?= $news['titre'] ?></h2>
<p><?= nl2br($news['contenu']) ?></p>

<?php if ($news['dateAjout'] != $news['dateModif']) { ?>
  <p style="text-align: right;"><small><em>Modifiée le <?= $news['dateModif']->format('d/m/Y à H\hi') ?></em></small></p>
<?php } ?>

<?php
if (empty($comments))
{
?>
<p>Aucun commentaire n'a encore été posté. Soyez le premier à en laisser un !</p>
<?php
}
else 
{
	foreach ($comments as $comment)
	{
	?>
	<fieldset>
	  <legend>
	    Posté par <strong><?= htmlspecialchars($comment['auteur']) ?></strong> le <?= $comment['date']->format('d/m/Y à H\hi') ?>
	    <?php if ($user->isAuthenticated()) { ?> -
	      <a href="admin/comment-update-<?= $comment['id'] ?>.html">Modifier</a> |
	      <a href="admin/comment-delete-<?= $comment['id'] ?>.html">Supprimer</a>
	    <?php } ?>
	  </legend>
	  <p><?= nl2br(htmlspecialchars($comment['contenu'])) ?></p>
	</fieldset>
	<?php
	}
}
?>

<p><a href="commenter-<?= $news['id'] ?>.html">Ajouter un commentaire</a></p>
</div>