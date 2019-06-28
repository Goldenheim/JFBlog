<h2>Répondre à un commentaire</h2>
<p>En réponse au commentaire de <?= $comment['auteur'] ?>, posté le <?= $comment['date'] ?>:</p>
<blockquote style="text-align: center;">" <?= $comment['contenu']?> "</blockquote>
<hr><br>
<form action="" method="post">
  
  	<textarea name="answer"></textarea>
    <br>
    <div class="container">
    	<div class="row">
    		<input class="btn btn-primary" type="submit" value="Répondre" />
    		<input class="btn btn-primary" type="button" onclick="window.location.replace('/admin/')" value="Annuler" />
    	</div>
    </div>
  </p>
</form>