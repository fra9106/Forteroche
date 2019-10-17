<?php 
session_start();
try { $bdd = new PDO('mysql:host=localhost;dbname=openclass;charset=utf8', 'root', '');

} catch (Exception $e) { die('ERREUR : ' . $e->getMessage());


}

?>

<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../../../public/css/style.css">
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script> 
  <script>tinymce.init({ selector:'textarea', content_css : '../../../public/css/style.css', 
        language_url: 'https://olli-suutari.github.io/tinyMCE-4-translations/fr_FR.js',
      language: 'fr_FR' });</script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf " crossorigin="anonymous">
  
  <title>chapitreAdmin</title>
</head>
<body>
   <div class="vuChapComment">
      <div align="center">
         <h3>Connecté!</h3>
         <br/>
         <br/>
         <h2>
            Bonjour Jean !

         </h2>
         <br />

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

  <form style="margin: 50px;"method="POST" action="">
   <input type="text" placeholder="title" id="title" name="title" /><br><br><br>
   <textarea name="content"  rows="5" cols="50" placeholder="Votre message"></textarea><br><br>
   <button type="submit"name="envoi_message"class="btn btn-primary">GO!</button>
   <?php if(isset($error)) { echo '<span style="color:#760001">' .$error. '</span>'; } ?>
</form>

<br />

<a href="../../../menu/blogAccueilConnect.php">Accueil</a>
<a href="#">Crypto</a>

<?php

?>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
<?php

?>