<?php

include("conect.php");

$nume=$_POST['nume'];
$prenume=$_POST['prenume'];
$email=$_POST['email'];
$comentariu=$_POST['comentariu'];

$query=" INSERT INTO `users` (`id`, `nume`, `prenume`, `email`, `comentariu`) VALUES (NULL, '$nume', '$prenume', '$email', '$comentariu');";
if (!mysqli_query($mysql,$query))
{ die(mysqli_error($mysql)); }
else { echo " Datele au fost intoduse! "; }

?>