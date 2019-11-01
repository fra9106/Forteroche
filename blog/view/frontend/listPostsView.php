<?php $title = 'Chapitres'; ?>
<!--affichage liste des chapitres mis en ligne-->
<?php ob_start();
?>

<div class="vuChapComment">
  <div align="center">
   <h2>Billet simple pour l'Alaska</h2>
   <em><h3>Derniers chapitres...</h3></em>
   <a href="index.php">retour à la page d'accueil</a>


   <?php
   while ($data = $posts->fetch())
   {

    ?>  

    <div class="news"> 
      <h4>
       <?=($data['title']) ?>
       <em><p>le <?= $data['creation_date_fr'] ?></p></em>
     </h4>
     
     <p>
       <?= nl2br($data['content']) ?><br>
       <em><p><a href="index.php?action=post&amp;id=<?= $data['id'] ?>">Commentaires</a></p></em>
     </p>
   </div>
   
   <?php
 }
 $posts->closeCursor();	
 ?>

</div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
