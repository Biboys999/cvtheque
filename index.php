<?php 

require('demandeur.php');
if (isset($_GET['id']) && $_GET['id'] > 0) {
  $filiation = getFiliationByDemandeur($_GET['id']);
  $formations = getFormationDemandeur($_GET['id']);
}
else {
  echo 'Erreur : aucun identifiant de billet envoyé';
} 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>CV - Rayane</title>
  <meta name="description" content="simple CV example created with HTML and CSS">
  <meta name="author" content="Dadimak">
  <link rel="icon" href="./img/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <?php require('entete.php');  ?>
  <main>
    <section>
      <h3>Formations</h3>
      <?php require('formation.php');  ?>
    </section>
    <section>
      <h3>Compétences</h3>
      <div class='skills'>
        <div class='column'>
          <h4>Bonne Connaissance</h4>
          <ul>
            <li>HTML5</li>
            <li>CSS</li>
            <li>JavaScript ES5/6</li>
            <li>SQL</li>
          </ul>
        </div>
        <div class='column'>
          <h4>Connaissance Basique</h4>
          <ul>
            <li>jQuery</li>
            <li>NodeJS</li>
            <li>MongoDB</li>
            <li>Django</li>
          </ul>
        </div>
        <div>
          <h4>Langues</h4>
          <p>🇬🇧 Anglais - Niveau C1/C2</p>
          <p>🇫🇷 Français - Avancé - C1</p>
          <p>🇪🇸 Espagnole - Intermediaire - B1/B2</p>
          <p>🇩🇪 Allemand - Elemantaire - A2</p>
        </div>
      </div>
    </section>

    <section>
      <h3>Cursus Scolaire et Universitaire</h3>
      <article>
        <div class='school'>
          <span>2015-2018</span> <strong>Universite Pierre et Marie</strong>
        </div>
        <div class="descrition">
          License en Informatique de Gestion
        </div>
      </article>
      <article>
        <div class='school'>
          <span>2012-2015</span> <strong>Lycée Jean Colin</strong>
        </div>
        <div>
          Baccalaureat Scientifique
        </div>
      </article>
    </section>
    <section>
      <h3>Experience Professionnelle</h3>
      <article>
        <div class='job-title'>
          <span>03.2018 - 06.2018</span> <strong>IPPON TECHNO</strong><br> <strong>Position:</strong> Développeur web Full Stack
        </div>
        <div>
          <p><strong>Technologies:</strong> Symfony / Angular</p>
          <ul class="job-description">
            <li>Développement d'application de vente en ligne</li>
            <li>Développement de gestion de fil d'attente</li>
            <li>Développement d'application de gestion des recrutements </li>
          </ul>
        </div>
        <div class='job-title'>
          <span>03.2018 - 06.2018</span> <strong>ATOS</strong><br> <strong>Position:</strong> Développeur Web
        </div>
        <div>
          <p><strong>Technologies:</strong> HTML5 / CSS / JavaScript / jQuery / PHP</p>
          <ul class="job-description">
            <li>Développement d'application de gestion d'un établissement scolaire</li>
            <li>Développement d'application de gestion de stock</li>
          </ul>
        </div>
      </article>
    </section>
  </main>
  <footer>
    <p>Created by: <a href="https://www.mohamedabousaiid.fr/">@Rayane</a>  / <a href="https://www.linkedin.com/in/mohamed.abousaiid/">LinkedIn</a> / 2020 </p>
  </footer>
</body>
</html>
