<center>
<?php $page = 'contact'?>
<html>
<link rel="stylesheet" href="style.css">
<meta charset="utf-8">

<?php
$bdd = new PDO("mysql:host=localhost;dbname=ISCC-2020-MyDevBlog;charset=utf8", "root", "");
if(isset($_POST['nom'], $_POST['mail'], $_POST['messag'])) {
   if(!empty($_POST['nom']) AND !empty($_POST['mail'])) {
      
      $nom1 = htmlspecialchars($_POST['nom']);
      $mail1 = htmlspecialchars($_POST['mail']);
      $message1 = htmlspecialchars($_POST['messag']);
      $ins = $bdd->prepare('INSERT INTO contact (nom, mail, messag, date_time_post) VALUES (?, ?, ?, NOW())');
      $ins->execute(array($nom1, $mail1, $message1));
      $message = 'Votre message a bien été envoyé !';

   } else {
      $message = 'Veuillez remplir tous les champs !';
   }
}
?>

<title>Contact</title>
    <!DOCTYPE html>
<html>
<body>
    <h2>Contact</h2>
   <form method="POST">
   <fieldset>
   <label for="nom">Votre nom & prénom</label>
    <div id="nom">
        <input type="text" name="nom" id="nom">
    </div>

    <label for="mail">Votre mail</label>
    <div id="mail">
        <input type="text" name="mail" id="mail">
    </div>
   
    <textarea name="messag" placeholder="Votre message"></textarea><br />
    
      <input type="submit" value="Envoyer" />

    </fieldset> 
   </form>
   <br />
   <?php if(isset($message)) { echo $message; } ?>
   </center>
</body>
</html>