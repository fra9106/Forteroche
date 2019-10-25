<?php $title = 'Commentaires Signalés'; ?>
<!--affichage liste des commentaires signalés-->
<?php ob_start();
session_start(); 
?>
<div class="vuChapComment">
	<div align="center">
<div><br>
            <h2>Commentaires signalés :</h2><br>
            <a href="index.php?action=listChapAdmin">Retour vers les chapitres</a>
            <?php
            while ($comment = $comments->fetch()) //renvoit dans $comment les infos du commentaire
            {
            ?> <!--affiche l'auteur la date et le commentaire-->
            <div class="news"><br>
            	<p><em>Id :<?= $comment['id'] ?></em></p>
                <p>le :<?= $comment['comment_date_fr'] ?></p>
                <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p><br>
                <a href="index.php?action=suppComments&amp;id=<?=$comment['id'] ?>"><button type="submit" name="suppComments"class="btn btn-primary">Supprime ton commentaire !</button></a><br>
                <a href="index.php?action=designalComments&amp;id=<?=$comment['id'] ?>"><button type="submit"class="btn btn-primary">Déignaler ce commentaire !</button></a><br><br>
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