<?php
    function age($date)
    {
      return (int) ((time() - strtotime($date)) / 3600 / 24 / 365);
    }
    function cnxBD(){
      //voir les variables d'environnement PHP
      return new PDO('mysql:host=localhost;dbname=cvtheque;charset=utf8', 'root', 'root') || new PDO('mysql:host=localhost;dbname=cvtheque;charset=utf8', 'root', 'root');
    }
    function getFiliationByDemandeur($idDemandeur){
      try
      {
        $bdd = cnxBD();
      }
      catch (Exception $e)
      {
        die('Erreur : ' . $e->getMessage());
      }

      $reponse = $bdd->prepare('SELECT * FROM candidat WHERE id = ?');
      $reponse->execute(array($idDemandeur));
      $filiation = $reponse->fetch();

      return $filiation;
    }

    function getFormationDemandeur($idDemandeur){
      try
      {
        $bdd = cnxBD();
      }
      catch (Exception $e)
      {
        die('Erreur : ' . $e->getMessage());
      }

      $reponse = $bdd->prepare('SELECT * FROM formation WHERE id_candidat = ?');
      $reponse->execute(array($idDemandeur));

      return $reponse;
    }
    
    
  ?>
