<?php
$host_name = "db123456789.db.1and1.com";
$database = "account_info";
$user_name = "root";
$password = "root";


$connect = mysqli_connect($host_name, $user_name, $password, $database);

if(mysqli_connect_errno())
{
echo '<p>La connexion au serveur MySQL a échoué: '.mysqli_connect_error().'</p>';
}
else
{
echo '<p>Connexion au serveur MySQL établie avec succès.</p>';
}
?>