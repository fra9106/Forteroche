<?php $title = 'Commentaires Signalés(admin)'; ?>
<!--affichage liste des commentaires signalés-->
<?php ob_start();

?>
<div class="vuChapComment">
	<div align="center">
    <div><br>
      <h2>Commentaires signalés :</h2><br>
      <a href="index.php?action=listChapAdmin">Retour vers les chapitres</a>
      
      <?php
      while ($comment = $comments->fetch())
      {
        ?> <!--affiche l'id de auteur la date et le commentaire-->
        <div class="news"><br>
         <p><em>Id : <?= $comment['id'] ?></em></p>
         <p><em>Le : <?= $comment['comment_date_fr'] ?></em></p>
         <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p><br>
         <a href="index.php?action=suppComments&amp;id=<?=$comment['id'] ?>"><button type="submit" name="suppComments"class="btn btn-primary">Supprime ton commentaire !</button></a>
         <a href="index.php?action=designalComments&amp;id=<?=$comment['id'] ?>"><button type="submit"class="btn btn-primary">Désignale ce commentaire !</button></a><br><br>
       </div>
       <?php
     }
     $comments->closeCursor();
     ?>
   </div>
 </div>
</div>

<?php

?>
<?php $content = ob_get_clean(); ?>
<?php require('adminTemplate.php'); ?>