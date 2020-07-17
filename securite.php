<html>
<link rel="stylesheet" href="style/style.css">
<?php
    $login=$_POST['login'];
    $password=$_POST['password'];


        if ($password ==  "15072020"){
            session_start();
            $_SESSION['id']=$login;
            setcookie('id', $_SESSION['id'], time() +365*24*3600, null, null, false, true);
            header('Location: http://localhost/ISCC-2020/ISCC-2020-MyDevBlog/BackOffice/redaction.php?');
            exit();
        }
            

        else{
            echo '<h3>L\'accès est réservé aux admins</h3>';
            echo '<p><A HREF="http://localhost/ISCC-2020/ISCC-2020-MyDevBlog/index.php?page=accueil">Vous n\'êtes pas admin ?</A></p>';
        }
?>
</html>