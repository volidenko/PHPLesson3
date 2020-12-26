<?
if(isset($_POST["accept"])){
    $login=$_GET["login"];
    $passw=$_GET["passw"];
    echo "Привет, ".$login;
}
