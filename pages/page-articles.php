<?php $page = 'articles'?>
<html>
<link rel="stylesheet" href="style.css">
<meta charset="utf-8">

<title>Articles</title>
<h2>Articles</h2>
<?php
$connect = mysqli_connect("localhost", "root", "", "ISCC-2020-MyDevBlog"); 
if (!$connect) { 
   echo "Échec de la connexion : ".mysqli_connect_error(); 
   exit(); 
} 
$requete = "SELECT * FROM articles ORDER BY date_time_post DESC"; 
   if ($resultat = mysqli_query($connect,$requete)) { 
      date_default_timezone_set('Europe/Paris'); 

      while ($ligne = mysqli_fetch_assoc($resultat)) { 
         $dt_debut = date_create_from_format('Y-m-d H:i:s', $ligne['date_time_post']); 
         echo "<h4>".$ligne['titre']."</h4>"; 
         echo "<h5>Le ".$dt_debut->format('d/m/Y H:i')."</h5>"; 
         echo "<p>".$ligne['contenu']."</p><br>"; 
      } 
   } 
   ?> 
   <br /> 
</html>