<?php $title = 'redaction des chapitres(admin)'; ?>
<?php ob_start(); 
?>
 <!--menu liens-->
<div class="vuChapComment">
  <div align="center">
   <h3>Connecté!</h3><br/><br/>
   <h2>Bonjour Jean !</h2><br/>
   <h3><a href="index.php">Accueil</a></h3>
   <h3><a href="index.php?action=listChapAdmin">Chapitres</a></h3>
   <h3><a href="index.php?action=commentsAdmin&amp;signalement=1">Commentaires signalés</a></h3>
   <p>
    Bienvenu chez toi!
  </p>

  <br/>
   <!--formulaire pour taper nouveau chapitre-->
  <h3>Rédaction chapitre : </h3>

  <form class="form"method="post" action="index.php?action=editChapitre&amp;id= ">
   <input type="text" placeholder="title" id="title" name="title" /><br><br><br>
   <textarea class="mytextarea" name="content"  rows="5" cols="50" placeholder="Votre message"></textarea><br>
   <button type="submit" name="envoi_message"class="btn btn-primary">Envoie ton chapitre !</button><br><br>
 </form>

</div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('adminTemplate.php'); ?> 