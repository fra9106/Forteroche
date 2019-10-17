<?php $title = 'ChapitreAdmin';?>
<!--affichage liste des chapitres mis en ligne-->
<?php ob_start(); 
session_start();
try { $bdd = new PDO('mysql:host=localhost;dbname=openclass;charset=utf8', 'root', '');

} catch (Exception $e) { die('ERREUR : ' . $e->getMessage());


}

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

         if(isset($_POST['envoi_message']) AND isset($_POST['title']) AND isset($_POST['content'])) 
         {
          $title = ($_POST['title']);
          $content = ($_POST['content']);
          if(!empty(trim($_POST['title'])) AND !empty(trim($_POST['content'])))
          { 				
           $inserChap = $bdd->prepare("INSERT INTO posts(title, content, creation_date) VALUES (?, ?, NOW())");
           $inserChap->execute(array($title, $content));

        }else{ $erreur = "Oups... Vous n'avez pas saisi de message!";
     }             

  }
  ?>
  <h3>Envoyer un chapitre</h3>

  <form class="form"method="POST" action="">
   <input type="text" placeholder="title" id="title" name="title" /><br><br><br>
   <textarea name="content"  rows="5" cols="50" placeholder="Votre message"></textarea><br><br>
   <button type="submit"name="envoi_message"class="btn btn-primary">GO!</button>
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