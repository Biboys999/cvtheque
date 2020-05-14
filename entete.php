<header>
<?php
      if($filiation)
        {
    ?>
    <div>
    <?php echo ('<img src="./img/'. $filiation['photo'].'" alt="'. $filiation['photo'].'">');	?>
    </div>
    
    <h1><?php echo htmlspecialchars($filiation['nom']. " ". $filiation['prenom']); ?></h1>
    <h4><?php echo htmlspecialchars(age($filiation['date_naissance']). " ans, ". $filiation['etat_civil']. ", ".($filiation['enfant'] == 0 ? ' sans enfant' : $filiation['enfant'] . " enfant(s)")); ?></h4>
    
    <section>
      <p><?php echo nl2br($filiation['presentation']); ?></p>
      
      <a href="https://web.facebook.com/mohamed.abousaiid" target="_blank">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="https://www.twitter.com/mohamed.abousaiid/" target="_blank">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="https://github.com/Biboys999" target="_blank">
        <i class="fab fa-github-alt"></i>
      </a>
      <a href="https://www.instagram.com/mohamed.abousaiid/" target="_blank">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://www.linkedin.com/in/mohamed.abousaiid/" target="_blank">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </section>
    <?php
        }
     // $reponse->closeCursor();
    ?>

  </header>