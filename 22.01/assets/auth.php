<?php
    require_once ("connect_db.php");

    $login = $_POST["login"];
    $password = $_POST["password"];

    $qry = "SELECT login, password FROM `users` WHERE login = '$login' AND password = '$password'";
    $result = mysqli_query($connect, $qry) or die(mysqli_error($connect));
    $num_rows = mysqli_num_rows($result);

    if($num_rows!=0) {
        header('Location: page.php');
    } elseif ($login != "") echo "<p style='color: red; font-size: 20px'>Проблемы со входом!!</p><hr>";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
    <link rel="stylesheet" href="style_auth.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
<div class="container">
    <div class="row">

        <div class="col-md-offset-3 col-md-6">
            <form class="form-horizontal" method="post" action="">
                <span class="heading">АВТОРИЗАЦИЯ</span>
                <div class="form-group">
                    <label>
                        <input type="text" class="form-control" name="login" placeholder="Login">
                    </label>
                    <i class="fa fa-user"></i>
                </div>
                <div class="form-group help">
                    <label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </label>
                    <i class="fa fa-lock"></i>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-default" placeholder="ВХОД" value="ВХОД">
                </div>
            </form>
        </div>

    </div><!-- /.row -->
</div><!-- /.container -->
</body>
</html>
