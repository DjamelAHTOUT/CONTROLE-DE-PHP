<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php
        include "database.inc.php";


 if(isset($_POST['ID'])){ 
    $ID = $_POST['ID'];   
    
    $requetedelete = "DELETE FROM livre WHERE livre.id = $ID";
    $resultat = $db->query($requete);
    var_dump($requetedelete);

    if ($resultat)
    echo "<p>le film a été ajouté dans la bibliothèques</p>";
else
    echo "<p>Erreur</p>";
}
        ?>
    <h1>Supprimer le film dans ma bibliotheque</h1>
    <form method="post">
        	<label>ID</label>
            <input type="text" name="id">
			<input class="btnajt" type="submit" name="submit" value="supprimer"><br> 

    </body>
</html>