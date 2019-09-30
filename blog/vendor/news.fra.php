<?php 
try { $bdd = new PDO('mysql:host=db777629264.hosting-data.io;dbname=db777629264', 'dbo777629264', '506Kikilekikou506!');
	
} catch (Exception $e) { die('ERREUR : ' . $e->getMessage());
	
	
}

?>

<html>
   <head>
      <title>News</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
      <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
      <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
      <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
      <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
      <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
      <link rel="manifest" href="/manifest.json">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
      <meta name="theme-color" content="#ffffff">
   </head>
   <body>
      <div style=" background: radial-gradient(white,grey);border: 1px solid black;border-radius: 5px">
         <div align="center">
            <h3>Connecté!</h3>
            <br/>
            <br/>
            <h2>
               Slt Fra!
               
            </h2>
            <br />
            
            <p>
               Bienvenue chez moi!
            </p>
            
            <br />
            <?php

           if(isset($_POST['envoi_message']) AND isset($_POST['title']) AND isset($_POST['content'])) 
{
 				$title = htmlspecialchars($_POST['title']);
 				$content = htmlspecialchars($_POST['content']);
if(!empty(trim($_POST['title'])) AND !empty(trim($_POST['content'])))
{ 				
 			$insernew = $bdd->prepare("INSERT INTO posts(title,content, creation_date) VALUES (?, ?, NOW())");
            $insernew->execute(array($title, $content));

               	}else{ $erreur = "Oups... Vous n'avez pas saisi de message!";
        }             

}
  ?>
            <h3>Envoyer une News</h3>

            <form style="margin: 50px;"method="POST" action="">
               <input type="text" placeholder="title" id="title" name="title" /><br><br><br>
               <textarea class="form-control" name="content"  rows="7" cols="50" placeholder="Votre message"></textarea><br>
               <button type="submit"name="envoi_message"class="btn btn-primary">GO!</button>
               <?php if(isset($error)) { echo '<span style="color:#760001">' .$error. '</span>'; } ?>
            </form>

            <br />
            <a href="Acceuil.php">Acceuil</a>
            <a href="deconnexion.php">Se déconnecter</a>
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