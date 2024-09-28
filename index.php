<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>страница входа</title>
</head>
<body>
<form method="post">
  <div class="div1">Афторизация</div>
  <input class="login" name="login" placeholder="login" type="text"><br><br>
  <input name="password" class="password" placeholder="password" type="password"><br><br>
  <input type="submit" class="submit" value="Афторизоваться">
 </form>
</body>
<?php
$sql = new mysqli('localhost','root','','user');
$sql->query("SET NAMES 'utf8'");
$login = $_POST['login'];
$password = $_POST['password'];
if(strlen($password) == ''||strlen($login) == ''){

    echo "<div class='div2'>заполните все поля !<div>";
    
    }
    else{
        $res =  $sql->query("SELECT  `login` FROM `use` WHERE `login` = '$login'");
        if($res->num_rows >=1){

            header('Location:index2.php');
        }
        else{
            echo "<div class='div3'>такой уч.записи в базе нет !<div>";
        }
    }

$sql->close();
?>
</html>