<?php
include "header2.php"?>
<!DOCTYPE html>

<html>
<body>
<link rel="stylesheet" href="../style/style.css">
<title>Liste d'admins</title>
<h6>Liste d'admins</h6>

<?php
function connect_to_database(){
            $servername = "localhost";
            $username = 'root';
            $password = '';
            $databasename = "ISCC-2020-MyDevBlog";

        try{
            $pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }
        catch (PDOException $e){
            echo "Echec de connexion : ". $e->getMessage();
        }
        }
        $pdo=connect_to_database();
        $reponse= $pdo->query ('SELECT * FROM utilisateurs');
        while ($data = $reponse->fetch()){
            echo '<ul><li>' . $data['loginn']. '</li></ul>';
        }
        ?>

</body>
</html>