<!--Affichage interface commentaires-->
<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>

 <div class="vuChapComment">
      <div align="center"><br>
         <h2>Billet simple pour l'Alaska</h2>
         <p><a href="index.php">Retour à la liste des Chapitres</a></p><br>

         <div class="news">
         	<h3>
         		<?= htmlspecialchars($post['title']) ?>
         		<em>le <?= $post['creation_date_fr'] ?></em>
         	</h3>
         	
         	<p>
         		<?= nl2br(htmlspecialchars($post['content'])) ?>
         	</p>
         </div>

         <h2>Votre commentaire</h2><br/>

         <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
            <div>
                <input type="text" id="author" name="author" placeholder="pseudo">
            </div><br>
             <div>
                 <textarea id="comment" name="comment" placeholder="Votre texte"></textarea>
             </div><br>
             <div>
             <button type="submit"class="btn btn-primary">GO!</button>
             </div><br>
         </form>

        <div class="news">
            <h2>Vos commentaires</h2>
        	<?php
        	while ($comment = $comments->fetch()) //renvoit dans $comment les infos du commentaire
        	{
        	?>     <!--affiche l'auteur la date et le commentaire-->
        		<p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
        		<p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
        	<?php
        	}
        	?>
		</div>
      </div>
  </div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>