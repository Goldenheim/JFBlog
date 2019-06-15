<section>
	<div class="row">
		<p class="offset-sm-3 col-sm-6">Il y a actuellement <?= $nombreNews ?> news. En voici la liste :</p>
	</div>

	<table class="table table-striped table-condensed">
	  <tr><th>Auteur</th><th>Titre</th><th>Date d'ajout</th><th>Dernière modification</th><th>Action</th></tr>
	<?php
	foreach ($listeNews as $news)
	{
	  echo '<tr><td>', $news['auteur'], '</td><td><a href="news-update-', $news['id'], '.html">', $news['titre'], '</a></td><td>le ', $news['dateAjout']->format('d/m/Y à H\hi'), '</td><td>', ($news['dateAjout'] == $news['dateModif'] ? '-' : 'le '.$news['dateModif']->format('d/m/Y à H\hi')), '</td><td><a href="news-update-', $news['id'], '.html"><i class="fas fa-edit"> Modifier</i></a> <a href="news-delete-', $news['id'], '.html"><i class="fas fa-trash"> Supprimer</i></a></td></tr>', "\n";
	}
	?>
	</table>
</section>