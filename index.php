<!doctype html>
<head>
  <meta charset="utf-8">
</head>
<body>
<?php
include 'header.php';
    if($_GET)
    {
    if($_GET["page"]== "accueil")
    {
        include 'page-accueil.php';
    }
    if($_GET["page"]== "articles")
    {
        include 'page-articles.php';
    }
    if($_GET["page"]== "contact")
    {
        include 'page-contact.php';
    }
    }
include 'footer.php';
?>
</body>
</html>