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
                <p>le <?= $comment['comment_date_fr'] ?></p>
                <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p><br>
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