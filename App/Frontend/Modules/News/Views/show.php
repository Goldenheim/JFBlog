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
<div class="container">
	<div class="row">
		<h2 class="mx-auto">COMMENTAIRES</h2>
	</div>
</div>
<hr>
<?php
if (empty($comments))
{
?>
<div class="row">
	<p class="mx-auto">Aucun commentaire n'a encore été posté pour cet article</p>	
</div>
<?php
}
else 
{
	foreach ($comments as $comment)
	{
	?>
	<div class="container mx-auto media border p-3 m-3">
		<div class="media-body">
				<fieldset>
				  <legend class="" style="margin: 0!important;">
				    <span class="col-lg-2 small">Posté par <strong><?= htmlspecialchars($comment['auteur']) ?></strong> le <?= $comment['date']->format('d/m/Y à H\hi') ?></span>
				    	<div class="btn-group float-right"> 
				    	  <button class="btn btn-info">Action(s)</button>
			  			  <button class="btn btn-info dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
				    	  <ul class="dropdown-menu">
				    	  	<?php if ($user->isAuthenticated()) { ?> 
				    	    <li class="nav-item"><a class="nav-link" href="admin/comment-update-<?= $comment['id'] ?>.html"><i class="fas fa-edit"> Modifier</i></a></li>
				    	    <li class="nav-item"><a class="nav-link" href="admin/comment-delete-<?= $comment['id'] ?>.html"><i class="fas fa-trash"> Supprimer</i></a></li>
				    	    <?php if ($comment['answer'] != null) { ?>
				    	    		<li class="nav-item"><a href="admin/Answer-delete-<?= $comment['id'] ?>.html"><i class="fas fa-eraser"> Modifier la réponse</i></a></li>
				    	    	<?php
				    	    	} else 
				    	    	{ ?>
			    	    			<li class="nav-item"><a class="nav-link" href="admin/comment-answer-<?= $comment['id'] ?>.html"><i class="fas fa-feather-alt"> Répondre</i></a></li>
				    	    <?php
				    	    } } else { ?>
				    	    		<li class="nav-item"><a class="nav-link" data-toggle="tooltip" title="signaler le commentaire" href="/comment-report-<?= $comment['id'] ?>.html"><i class="fas fa-flag"> Signaler</i></a></li>
				    	    <?php 
				    			} ?>
				    	  </ul>
				    	</div> 
				  </legend>
				   <div class="container">
			   		   <?php
			   		   if ($comment['report'] == 2) 
			   		   	{ 
			   	   			echo '<p id="comment-'.$comment['id'].'">'.nl2br($comment['contenu']).'<div style="text-align:right;"><small> Édité par J.Forteroche</small><hr></div></p>'; ?>
			   		   		
			   			<?php 
			   			} else 
			   			{
			   		   	echo '<p id="comment-'.$comment['id'].'">'.nl2br($comment['contenu']).'</P>';
			   		 	}
			   		 	if ($comment['answer'] != null) 
			   		 	{
			   	    		echo '<br><div><i class="fas fa-comment-dots"></i> Réponse de l\'admin:</div><div class="card bg-danger text-white"><div class="card-body">'.nl2br($comment['answer']).'</div></div>';
			   	    	}	     
			   		 ?>   	
				   </div>	   
				   <br>
				</fieldset>
		</div>
	</div>
	<?php
	}
}
?>

<div class="container">
	<div class="row">
		<a class="mx-auto" href="commenter-<?= $news['id'] ?>.html"><button class="btn btn-info">Ajouter un commentaire</button></a>
	</div>
</div>
</div>