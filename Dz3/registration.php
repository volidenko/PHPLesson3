<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <?
    if(!isset($_POST["accept"]))
    {
        ?>
    <form action="registration.php" method="POST">
        <div class="form-group"><label for='login'>Login:</label>
            <input type='text' name='login' class="form-control" placeholder="Enter login" /></div>

        <div class="form-group"><label for='email'>Email:</label>
            <input type='email' name='email' class="form-control" placeholder="Enter email" /></div>

        <div class="form-group"><label for='passw'>Password:</label>
            <input type='password' name='passw' class="form-control" placeholder="Enter password" /></div>

        <input type='submit' name='accept' value='Login' class="btn btn-primary" />
    </form>
    <?
    }
    else    
    {
        $users="users.txt";
        $fd=fopen($users, "a+");
        while(!feof($fd)){
            $line=fgets($fd);
            $readname=substr($line,0,strpos($line, ":"));
        }
        $line= "Login: ". $_POST["login"] . "; Email: " .$_POST["email"]. "; Password: ".$_POST["passw"]."\r\n";
        fputs($fd,$line);
        fclose($fd);
        echo "<h3><span style='color:green'>Пользователь добавлен!</span></h3>";
    }

    //     $str=file_get_contents("user.txt");
    //     $pos=strstr($str, $_POST["login"]);
    //     if ($pos===false) {
    //         $userdata = "Login: ". $_POST["login"] . "; Email: " .$_POST["email"]. "; Password: ".$_POST["passw"] ."\n";
    //         $file=fopen("user.txt", "a+");
    //         fwrite($file, $userdata);
    //         fclose($file);
    //     }
    // }
?>
</body>

</html>


<!-- $title="Новости";
echo "<h2 style='color: ".$color="blue"."'>".$title."</h2>";
echo "<a href='home.php'> На главную </a>"; -->