<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma bibliotheque</title>
    <link rel="stylesheet" href="liste.css">
    
</head>
    <body>
        <?php
        include "database.inc.php";
        
// On récupère tout le contenu de la table livre

$sqlQuery = 'SELECT * FROM livre';
$livre = $db->prepare($sqlQuery);
$livre->execute();
$noms = $livre->fetchAll();
        ?>
        <h1> Bienvenue dans ma bibliotheque !</h1>              
        <table class="custumiserTable">
  <thead>
    <tr>
      <th>ID</th>
      <th>TITRE</th>
      <th>SYNOPSIS</th>
      <th>ID AUTEUR</th>
    </tr>
  </thead>
  <tbody>

  <?php
  foreach($noms as $nom){
    ?>
<tr>
      <td>   <?php echo $nom['ID'];?>         </td>
      <td>   <?php echo $nom['titre'];  ?>    </td>
      <td>   <?php echo $nom['synopsis'];?>   </td>
      <td>   <?php echo $nom['id auteur'];?>  </td>

    </tr>
    
    <?php 
  }
    ?>
  </tbody>
</table>
    </body>
    
</html>

