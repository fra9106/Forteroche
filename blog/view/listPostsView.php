<?php $title = 'Mes news'; ?>

<?php ob_start(); ?>

 <div style="background: radial-gradient(white,grey);border: 1px solid black;
        border-radius: 5px;">
      <div align="center">
         <h2 style="color:#760001;">Mes news</h2><br/>
         <em><h3>Derniers Posts...</h3></em><br>

         <?php
         while ($data = $posts->fetch())
         {

        ?>  

         <div style="border: 1px solid #760001; margin: 15px 15px 15px;" class="news">
         	<h3>
         		<?= htmlspecialchars($data['title']) ?>
         		<em>le <?= $data['creation_date_fr'] ?></em>
         	</h3>
         	
         	<p>
         		<?= nl2br(htmlspecialchars($data['content'])) ?><br>


                <em><a href="post.php?id=<?= $data['id'] ?>">Commentaires</a></em>
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
