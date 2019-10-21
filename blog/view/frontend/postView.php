<!--Affichage interface commentaires-->
<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); 
session_start();
//$_SESSION['id_user'] = $_POST['id_user'];
?>

 <div class="vuChapComment">
      <div align="center"><br>
         <h2>Billet simple pour l'Alaska</h2>
         <p><a href="index.php">Retour à la liste des Chapitres</a></p><br>

         <div class="news">
         	<h3>
         		<?= ($post['title']) ?>
         		<em>le <?= $post['creation_date_fr'] ?></em>
         	</h3>
         	
         	<p>
         		<?= nl2br($post['content']) ?>
         	</p>
         </div>

                <?php  if(isset($_SESSION['pseudo'])) { ?> 
               

                <h2>Mon commentaire :</h2><br/>

         <form action="index.php?action=addComment&amp;id=<?=$post['id'] ?>"method="post">
            
             <div>
                 <textarea id="comment" name="comment" placeholder="Votre texte"></textarea>
             </div><br>
             <div>
             <button type="submit"class="btn btn-primary">J'envoie mon commentaire !</button><br><br>
             </div>
         </form>
        <?php 
          }else{ echo '<h3 class="error">Pour l\'ajout d\'un commentaire, veuillez vous connecter !</h3>'; 

            }
          ?>
         

        <div>
            <h2>Vos commentaires :</h2><br>
            <?php
            while ($comment = $comments->fetch()) //renvoit dans $comment les infos du commentaire
            {
            ?> <!--affiche l'auteur la date et le commentaire-->
            <div class="vuChapComment"><br>
                <p>le <?= $comment['comment_date_fr'] ?></p>
                <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p><br>
                <a href="index.php?action=signalement&amp;id=<?=$comment['id'] ?>"><button type="submit"class="btn btn-primary">Signaler ce commentaire !</button></a><br><br>
            </div>
            <?php
            }
            ?>
        </div>
      </div>
  </div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?> 
