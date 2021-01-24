<?php
    require_once ("assets/connect_db.php");

    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $age = $_POST["age"];
    $login = $_POST["login"];
    $password = $_POST["password"];

    if (!empty($_POST["login"]) and !empty($_POST["password"])) {
        $qry_exists = "SELECT login FROM `users` WHERE login = '$login'";
        $result_exists = mysqli_query($connect, $qry_exists);
        $num_rows_exists = mysqli_num_rows($result_exists);

        if ($num_rows_exists != 0) {
            echo "<p style='color: red; font-size: 20px'>Такой пользователь уже существует!</p><hr>";
        } else {

            if ($_POST["password"] == $_POST["password_check"]) {

                if (!empty($login) and !empty($password)) {
                    $result = mysqli_query($connect, "INSERT INTO users (`name`, `surname`, `age`, `login`, `password`) 
                     VALUES ('$name','$surname','$age','$login','$password')");
                }
                header('Location: assets/auth.php');
            } else {
                echo "<p style='color: red; font-size: 20px'>Пароли не совпадают, введите еще раз!</p><hr>";
            }
        }
    }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
    <link rel="stylesheet" href="assets/style_reg.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>

<div class="container">
    <div class="row main-form">
        <form class="" method="post" action="reg.php">

            <div class="form-group">
                <label for="name" class="cols-sm-2 control-label">Your Name</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <label>
                            <input type="text" class="form-control" name="name" placeholder="Enter your Name"/>
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">Your Surname</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <label>
                            <input type="text" class="form-control" name="surname" placeholder="Enter your Surname"/>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="username" class="cols-sm-2 control-label">Your Age</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <label>
                            <input type="text" class="form-control" name="age" placeholder="Enter your Age"/>
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="username" class="cols-sm-2 control-label">Login</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <label>
                            <input type="text" class="form-control" name="login" placeholder="Enter your Login"/>
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="cols-sm-2 control-label">Password</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <label>
                            <input type="password" class="form-control" name="password" placeholder="Enter your Password"/>
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <label>
                            <input type="password" class="form-control" name="password_check" placeholder="Confirm your Password"/>
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group ">
                <input type="submit" class="btn btn-primary btn-lg btn-block
                login-button" placeholder="Register">
            </div>

        </form>
    </div>
</div>
</body>
</html>