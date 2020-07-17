<?php
$base = mysqli_connect("localhost", "root", "", "ISCC-2020-MyDevBlog");
$loginn=$_POST['loginn'];
$passwordd =$_POST['passwordd'];
$users = "utilisateurs";


$handler = mysqli_query($base, "SELECT id FROM utilisateurs ORDER BY id DESC LIMIT 1");
$data = mysqli_fetch_assoc($handler);
$id = $data['id'];
$id = intval($id) + 1;



$query="INSERT INTO utilisateurs(id, loginn, passwordd) VALUES('$id','$loginn','$passwordd')";
mysqli_query($base, $query);

?> 