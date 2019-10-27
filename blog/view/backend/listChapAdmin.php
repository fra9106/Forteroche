<?php $title = 'liste des chapitres en ligne'; ?>
<?php ob_start();
 ?>

<div class="vuChapComment">
  <div align="center">
   <h2>Billet simple pour l'Alaska</h2>
   <em><h3>Derniers chapitres...</h3></em>
   <a href="menu/blogAccueil.php">Retour à la page d'accueil</a><br>
   <a href="index.php?action=adminViewConnect&amp;droits=<?=$_SESSION['droits']?>">Retour à la page rédacChap</a>

   <?php
   while ($data = $posts->fetch())
   {

    ?>  

    <div class="news"> 
      <h4>
       <?=($data['title']) ?>
       <em>le <?= $data['creation_date_fr'] ?></em>
     </h4>

     <p>
       <?= nl2br($data['content']) ?><br>
       <em><a href="index.php?action=chapitAdmin&amp;id=<?= $data['id'] ?>">Modifier</a></em>
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
