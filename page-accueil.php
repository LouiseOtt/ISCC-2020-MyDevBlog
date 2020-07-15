<?php $page = 'accueil'?>
<?php
$bdd = new PDO("mysql:host=localhost;dbname=louise-ott;charset=utf8", "root", "");
$articles = $bdd->query('SELECT * FROM articles ORDER BY date_time_post DESC');
?>
<!DOCTYPE html>
<html>
<head>
   <title>Accueil</title>
   <meta charset="utf-8">
</head>
<body>
<h2>Accueil</h2>
    <h3>Présentation</h3>
    <p>Bienvenu.e.s à toutes et à tous!<br>
Je m'appelle Louise OTT, je suis en première année <i>(bientôt deuxième héhé!)</i> à l'ISEG, école de communication et marketing à Strasbourg ! Je suis passionnée de cinéma
J'espère que vous aussi, et si c'est le cas, vous êtes au bon endroit pour en apprendre un maximum !
<br>Venez consulter les articles pour assouvir votre soif de savoir<br><br>
    <h3>Mes derniers articles</h3>
    <div class = "articles">
      <?php while($a = $articles->fetch()) { ?>
      <a href="page-articles.php?id=<?= $a['id'] ?>"><?= $a['titre'] ?></a><br>
      <?php } ?>

   <?php
    $bdd = new PDO ('mysql:host = localhost;dbname=louise-ott; charset=utf8', 'root', '');
    $articles = $bdd->query('SELECT * FROM articles ORDER BY date_time_post DESC LIMIT 0,05');
    $lastBuildDate = $bdd->query('SELECT date_time_post FROM articles ORDER BY date_time_post DESC LIMIT 0,1');
    $lastBuildDate = $lastBuildDate->fetch()['date_time_post'];
?>
</div>
</body>
</html>