<?php $title = 'Chapitre à modifier'; ?>
<?php ob_start();
session_start(); 
?>

<div class="vuChapComment">
	<div align="center">
		<h2>Billet simple pour l'Alaska</h2>
		<p><a href="index.php">Retour à la liste des Chapitres</a></p><br>
		<?php
		while ($data = $chapy->fetch())
		{
			?>
			<div class="news">
				<h3>
					<?= ($data['title']) ?>
					<em>le <?= $data['creation_date_fr'] ?></em>
				</h3>

				<p>
					<?= nl2br($data['content']) ?>
				</p>
			</div>
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
