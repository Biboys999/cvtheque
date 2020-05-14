<?php
  while($formation = $formations->fetch())
  {
?>
    <article class='course'>
      <div class='title'>
        <h4><?= htmlspecialchars($formation['nom']) ?></h4>
      </div>
      <div class="descrition">
        <p><?= htmlspecialchars($formation['description']) ?></p>
      </div>
    </article>
<?php
  }
?>