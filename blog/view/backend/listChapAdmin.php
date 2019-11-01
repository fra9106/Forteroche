<?php $title = 'liste des chapitres en ligne(admin)'; ?>
<?php ob_start();
?>

<div class="vuChapComment">
  <div align="center">
   <h2 id="ancre haut de page">Billet simple pour l'Alaska</h2>
   <em><h3>Derniers chapitres...</h3></em>
   <a href="index.php">Retour à la page d'accueil</a><br>
   <a href="index.php?action=adminViewConnect&amp;droits=<?=$_SESSION['droits']?>">Retour à la page rédacChap</a>
  
   <?php
   while ($data = $posts->fetch())
   {

    ?>  

    <div class="news"> <!--affiche titre, date et contenu chapitre-->
      <h4>
       <?=($data['title']) ?>
       <em>le <?= $data['creation_date_fr'] ?></em>
     </h4>

     <p>
       <?= nl2br($data['content']) ?><br>
       <em><p><a href="index.php?action=chapitAdmin&amp;id=<?= $data['id'] ?>">Modifier</a></p></em> <!--bouton modifier-->
       <em><p>Retour haut de la page: <a href="#ancre haut de page">cliquez ici</a></p></em>
     </p>
   </div>

   <?php
 }
 $posts->closeCursor();	
 ?>

</div>
</div>
<?php

?>
<?php $content = ob_get_clean(); ?>
<?php require('adminTemplate.php'); ?>
