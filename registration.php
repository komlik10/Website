<head>
    <meta charset="utf-8">
    <title>Welcome!</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link href="http://allfont.ru/allfont.css?fonts=bebas" rel="stylesheet" type="text/css" />
    <link href="http://allfont.ru/allfont.css?fonts=droid-sans" rel="stylesheet" type="text/css" />
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

<div class="login">
<h1>Registration</h1>
<form action="finishRegistration.php" method="POST">
    <input class="inp" type="text" name="name" placeholder="Your name"><br>
    <input class="inp" type="text" name="login" placeholder="Login"><br>
    <input class="inp" type="password" name="password" placeholder="password"><br>
    <input class="inp" type="password" name="verificationPassword" placeholder="verificate password"><br>
    <button class="button" type="submit"> Зарегестрироваться </button><br>
</form>

</div>