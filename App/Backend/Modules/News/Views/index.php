<div class="container">
	<section class="col-lg-12 col-xs-10 table-responsive mx-auto">
		<div class="row">
			<p class="mx-auto">Il y a actuellement <?= $nombreNews ?> articles publiés sur le site:</p>
		</div>

		<div class="row">
			<table class="table table-striped table-condensed">
			  <tr><th>Auteur</th><th>Titre</th><th>Date d'ajout</th><th>Dernière modification</th><th>Action</th></tr>
			<?php
			foreach ($listeNews as $news)
			{
			  echo '<tr><td>'. $news['auteur']. '</td><td><a href="news-update-'. $news['id']. '.html">'. $news['titre']. '</a></td><td>le '. $news['dateAjout']->format('d/m/Y à H\hi'). '</td><td>'. ($news['dateAjout'] == $news['dateModif'] ? '-' : 'le '.$news['dateModif']->format('d/m/Y à H\hi')). '</td><td><a href="news-update-'. $news['id']. '.html"><i class="fas fa-edit"></i></a> <a href="/news-', $news['id'],'.html"><i class="fas fa-eye"></i></a> <a href="news-delete-'. $news['id']. '.html"><i class="fas fa-trash"></i></a></td></tr>'. "\n";
			}
			?>
			</table>
		</div>
		<?php
		echo '<div class="row"><p class="mx-auto">Page(s) : [ '; //Pour l'affichage, on centre la liste des pages
		for($i=1; $i<=$Pages; $i++) //On fait notre boucle
		{
		     //On va faire notre condition
		     if($i==$pageActuelle) //Si il s'agit de la page actuelle...
		     {
		         echo $i; 
		     }	
		     else //Sinon...
		     {
		          echo ' <a href="/admin/page='.$i.'.html">'.$i.'</a> ';
		     }
		}
		echo ' ]</p></div>' ?>
		</section>
		<div class="row">
			<section class="col-lg-6 col-xs-10 table-responsive">
				<div class="row">
					<table class="table table-striped table-condensed">
					  <thead>Liste des 5 derniers commentaires:</thead>
					  <tr><th>Auteur</th><th>Contenu</th><th>Date</th><th>Article(s)</th><th>Action</th></tr>

					<?php
					foreach ($lastCom as $com)
					{
					  echo '<tr><td>', $com['auteur'], '</td><td><a href="/news-', $com['news'],'.html#comment-', $com['id'],'">', $com['contenu'], '</a></td><td>', $com['date'], '</td><td><a href="/news-', $com['news'],'.html">', $com['titre'], '</a></td><td><a href="comment-update-', $com['id'],'.html"><i class="fas fa-edit"></i></a> <a href="comment-delete-', $com['id'], '.html"><i class="fas fa-trash"></i></a></td></tr>', "\n";
					}
					?>

					</table>
				</div>	
			</section>
			<?php
			if ($listeReport != Null) {	
			?> 
			<section class="offset-lg-1 col-lg-5 col-xs-10 table-responsive">
				<div class="row">
					<table class="table table-striped table-condensed">
					  <thead>Des commentaires ont été signalés :</thead>
					  <tr><th>Auteur</th><th>Contenu</th><th>Article(s)</th><th>Action</th></tr>

					<?php
					foreach ($listeReport as $report)
					{
					  echo '<tr><td>', $report['auteur'], '</td><td><a href="/news-', $report['news'],'.html#comment-', $com['id'],'">', $report['contenu'], '</a></td><td>', $report['titre'], '</td><td><a href="comment-update-', $report['id'],'.html"><i class="fas fa-edit"></i></a> <a href="comment-delete-', $report['id'], '.html"><i class="fas fa-trash"></i></a></td></tr>', "\n";
					}
					?>

					</table>
				</div>	
			</section>	
			<?php
			}
			?>	
		</div>	
</div>
	