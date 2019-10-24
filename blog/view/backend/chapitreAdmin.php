<?php $title = 'Chapitre à modifier'; ?>
<?php ob_start();
session_start(); 
?>

<div class="vuChapComment">
	<div align="center">
		<h2>Billet simple pour l'Alaska</h2>
<<<<<<< HEAD
		<p><a href="index.php?action=listChapAdmin">Retour à la liste des Chapitres</a></p><br>
=======
		<p><a href="index.php">Retour à la liste des Chapitres</a></p><br>
>>>>>>> e304a763b360dd17d60dbca2716b34e16eaa5758
		<?php
		while ($data = $chapy->fetch())
		{
			?>
			<div class="news">
<<<<<<< HEAD
			
				 <h3>Modifier ou supprimer chapitre</h3>

  <form class="form"method="post" action="index.php?action=suppChapitre&amp;id=<?=$data['id'] ?>">
  	<textarea type="text" name= "date" rows="1" placeholder="date"><?= $data['creation_date_fr'] ?></textarea><br><br><br>
   <textarea type="text" name="title" rows="1" placeholder="title">ID : <?= $data['id']?> Titre : <?=$data['title'] ?></textarea><br><br><br>
   <textarea class="mytextarea" name="content"  rows="5" cols="50" placeholder="content"><?=$data['content'] ?></textarea><br><br>
   <a href="index.php?action=suppChapitre&amp;id=<?=$data['id'] ?>"><button type="submit" name="suppChapitre"class="btn btn-primary">Supprime ton chapitre !</button><br>
  </form>


=======
				<h3>
					<?= ($data['title']) ?>
					<em>le <?= $data['creation_date_fr'] ?></em>
				</h3>

				<p>
					<?= nl2br($data['content']) ?>
				</p>
			</div>
>>>>>>> e304a763b360dd17d60dbca2716b34e16eaa5758
			<?php
		}
		$chapy->closeCursor();	
		?>
	</div>
	
</div>


<?php

?>
<?php $content = ob_get_clean(); ?>
<?php require('adminTemplate.php'); ?>
