<!--Affichage interface commentaires-->
<?php $title = htmlspecialchars($post['title']); ?>
<?php ob_start(); 
?>

<div class="vuChapComment">
  <div align="center"><br>
   <h2 >Billet simple pour l'Alaska</h2>
   <p><a href="index.php?action=listPosts">Retour à la liste des Chapitres</a></p>
   <em><p><a href="#ancre bas de page">Allez directement aux commentaires</a></p></em>

   <div class="news">
    <h3>
     <?= ($post['title']) ?>
   </h3>

   <p><em> le <?= $post['creation_date_fr'] ?></em></p>

   <p>
     <?= nl2br($post['content']) ?>
   </p>
 </div>

 <?php  if(isset($_SESSION['id'])) { ?> 

  <div class="commentaires" >
    <h2>Mon commentaire :</h2><br/>

    <form action="index.php?action=addComment&amp;id=<?=$post['id'] ?>"method="post">

     <div>
       <textarea id="comment" name="comment" placeholder="Votre texte"></textarea>
     </div>
     <div><br>
       <button type="submit"class="btn btn-primary">J'envoie mon commentaire !</button><br>
     </div>
   </form>
   <?php 
 }else{
  echo '<h3 class="error">Pour l\'ajout d\'un commentaire, veuillez vous connecter !</h3>
  <p><a href="index.php?action=displFormulContact">Pas encore insrit ?</a></p>'; 
}
?>

<div>
  <h2 id="ancre bas de page" >Vos commentaires :</h2><br>
  <?php
            while ($comment = $comments->fetch()) //renvoit dans $comment les infos du commentaire
            {
              ?> <!--affiche l'auteur la date et le commentaire-->
              <div class="vuChapComment"><br>
                <p><em>Envoyé le : </em><?= $comment['comment_date_fr'] ?></p>
                <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
                <p><em>De la part de : </em><?= $comment['pseudo'] ?></p>
                <a href="index.php?action=signal&amp;id=<?=$comment['id'] ?>"><button type="submit"class="btn btn-primary">Signaler ce commentaire !</button></a><br><br>
              </div>
              <?php
            }
            ?>
          </div>
        </div>
      </div>
    </div>
    <?php $content = ob_get_clean(); ?>
    <?php require('template.php'); ?> 
