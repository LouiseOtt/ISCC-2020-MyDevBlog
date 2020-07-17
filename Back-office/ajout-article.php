<center>
<html><link rel="stylesheet" href="style.css"></html>
<?php

$bdd = new PDO("mysql:host=localhost;dbname=ISCC-2020-MyDevBlog;charset=utf8", "root", "");
if(isset($_POST['titre'], $_POST['red_article'])) {
   if(!empty($_POST['titre']) AND !empty($_POST['red_article'])) {
      
      $titre = htmlspecialchars($_POST['titre']);
      $red_article = htmlspecialchars($_POST['red_article']);
      $ins = $bdd->prepare('INSERT INTO articles (titre, contenu, date_time_post) VALUES (?, ?, NOW())');
      $ins->execute(array($titre, $red_article));
      $message = 'Votre article a bien été posté !';
   } else {
      $message = 'Veuillez remplir tous les champs';
   }
}
?>
<!DOCTYPE html>
<html>
<head>
   <?php include "header2.php"?>
   <link rel="stylesheet" href="../style/style.css">
   <title>Rédaction d'un article</title>
   <h6>Rédaction d'un article</h6>
   <meta charset="utf-8">
</head>
<body>
<form method="POST">
<fieldset> 

<label for="titre">Titre</label>
    <div id="titre">
        <input type="text" name="titre" id="titre">
    </div>

    <br><textarea name="red_article" placeholder="Votre message"></textarea><br />
   
      <br><br><input type="submit" value="Envoyer" />
    </fieldset>
</form>
   <br />
   <?php if(isset($message)) { echo $message; } ?>
</body>
</center>
</html>