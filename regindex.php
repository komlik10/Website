<?php session_start();
?>
<head>
    <meta charset="utf-8">
    <title>Welcome!</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Yanone+Kaffeesatz:wght@500&display=swap" rel="stylesheet">
</head>
    <div class="navigation">
        <ul>
            <li><a href="index.php">Main</a></li>
            <li><a href="biograpgy.php">About me</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="game.php">Game</a></li>
            <li style="float:right"><a class="active" href="regindex.php">Log in</a></li>
          </ul>
    </div>
<?php
    if (isset($_POST['login']) && isset($_POST['password'])) {
        include('config.php');
        $login = $_POST['login'];
        $password = $_POST['password'];
        $mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB);
        $authQuery = "SELECT * FROM `website.users` WHERE `login` = '$login'";
        if (!$result = $mysqli->query($authQuery)) {
            die('Ошибка запроса: '. $mysqli->error);
        }
        if (!$result->num_rows) {
            echo('<font color="red">Неверный логин или пароль!</font>');
        } else {
            $user = $result->fetch_assoc();
            if ($user['password'] !== hash('md5', $password)) {
                echo('<font color="red">Неверный логин или пароль!</font>');
            } else {
                $_SESSION['user'] = $user;
            }
        }
    }
    if (isset($_SESSION['user'])) {
        echo("<h2>Добро пожаловать, " . $_SESSION['user']['name'] . "</h2>");
    } else {
?>
<div class="login">
<h1>Sign   in</h1>
<form action="" method="POST">
    <input type="text" class="inp" name="login" placeholder="Логин">
    <br>
    <input type="password" class="inp" name="password" placeholder="Пароль">
    <br>
    <button class="button" type="submit"> Войти </button>
    <a class="but" href="registration.php">Зарегестрироваться</a>
</form>

<?php
}
?>

<form action="" method="POST">
    <input type="submit">
</form>
<?php 
unset($_SESSION['user']);
?>
<div>