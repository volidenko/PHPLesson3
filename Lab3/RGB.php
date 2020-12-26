<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color</title>
    <style>
        span{
            color: red;
            padding: 10px;
            margin: 10px;
            border: 2px solid darkgreen;
        }
    </style>
</head>

<body>
    <form method="POST">
        <div><input type='number' min='0' max='255' name='r' placeholder='R:0-255'/></div>
        <div><input type='number' min='0' max='255' name='g' placeholder="G:0-255"/></div>
        <div><input type='number' min='0' max='255' name='b' placeholder="B:0-255"/></div>
        <div><button type='submit' name='accept'>Accept</button></div>
    </form>
<?php
if(isset($_POST["accept"]))
{
    $r=$_POST['r'];
    $g=$_POST['g'];
    $b=$_POST['b'];
    echo "<br/><span style='background-color: rgb(".$r.",".$g.",".$b.")'>Hello World!</span>";
}
?>
</body>
</html>