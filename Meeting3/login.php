<?
//echo "<form action='process.php' method='GET'>";
//echo "<form action='process.php' method='POST'>";

if(!isset($_POST["accept"]))
{
echo "<form method='POST'>";
echo "<div><label for='login'>Login:</label>";
echo "<input type='text' name='login'/></div>";
echo "<div><label for='passw'>Password:</label>";
echo "<input type='password' name='passw'/></div>";
echo "<input type='submit' name='accept' value='Login'/>";
echo "</form>";
}
else
{
    $login=$_POST["login"];
    $passw=$_POST["passw"];
    echo "Привет, ".$login;
    echo "Ваш пароль: ".$passw;
    print_r($_POST);
    unset($_POST["accept"]);
    //$_POST = array();
    echo "<br/>";
    print_r($_POST);
}