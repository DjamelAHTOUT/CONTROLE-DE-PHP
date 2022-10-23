<!DOCTYPE html>
<html lang="fr">
	<head>
        <title>Formulaire</title>
		<meta charset="utf-8">
        <link rel="stylesheet" href="liste.css">
	</head>
	<body>
        <?php
        include "database.inc.php";

        
if(isset($_POST['submit'])){
    $titre  = $_POST['Titre'];
    $syn    = $_POST['Synopsis'];
    
    $requete = "INSERT INTO livre (`titre`,`synopsis`) VALUES ( '$titre','$syn')";
    $resultat = $db->query($requete);
    if ($resultat)
        echo "<p>le film a été ajouté dans la bibliothèques</p>";
    else
        echo "<p>Erreur</p>";
}

    ?>

		<h1>Ajouter un film dans ma bibliothèques</h1>
		<form method="post">
        	<label>Titre</label>
            <input type="text" name="Titre"> 
			<label>Synopsis</label>
            <input type="text" name="Synopsis">
			<input class="btnajt" type="submit" name="submit" value="Ajouter"><br> 
		</form>
	</body>
</html>
