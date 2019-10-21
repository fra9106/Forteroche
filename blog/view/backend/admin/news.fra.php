<?php $title = 'ChapitreAdmin';?>
<!--affichage liste des chapitres mis en ligne-->
<?php ob_start(); 
session_start();
?>

<div class="vuChapComment">
  <div align="center">
   <h3>Connecté!</h3><br/><br/>
   <h2>Bonjour Jean !</h2><br />

   <p>
    Bienvenue chez toi!
  </p>

  <br />
  <?php
    
  ?>
  <h3>Envoyer un chapitre</h3>

  <form class="form"method="post" action="../../../index.php?action=editChapitre&amp;id= ">
   <input type="text" placeholder="title" id="title" name="title" /><br><br><br>
   <textarea id="mytextarea" name="content"  rows="5" cols="50" placeholder="Votre message"></textarea><br><br>
   <button type="submit" name="envoi_message"class="btn btn-primary">GO!</button>
   <?php if(isset($error)) { echo '<span style="color:#760001">' .$error. '</span>'; } ?>
 </form>

 <br />

 <a href="../../../menu/blogAccueilConnect.php">Accueil</a>


 <?php

 ?>
</div>
</div>

<?php

?>
<?php $content = ob_get_clean(); ?>
<?php require('adminTemplate.php'); ?> 