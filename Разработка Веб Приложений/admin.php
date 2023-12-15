<?php
session_start();
include_once('main.php');

if (!isset($_SESSION["username"])) {
    header("Location: auth.php");
    exit();
}

if(isset($_GET['formsubmit'])) echo"<script>alert('Пароль изменён!');</script>";
if(isset($_GET['unformsubmit'])) echo"<script>alert('Ошибка!');</script>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="icon" type="image" href="photos/icon.png">
    <?php include 'main.php'?>
    <title>SetnerStore/Админка</title>
</head>
<body>

       
        <div class="nav">
            <h1 class = "nav_title">Административная панель</h1>
            <ul class="nav_list">
                <li><a href="admin.php" class="nav_a">Главная</a></li>
                <li><a href="change_news.php" class="nav_a">Редактировать новости</a></li>
                <li><a href="change_catalog.php" class="nav_a">Редактировать каталог</a></li>
                <li><a href="exit_from_auth.php" class="nav_a">Выйти</a></li>
            </ul>
        </div>
    
        <div class="container">              
                <h2 class="auth_header">Изменение пароля</h2>
            <form class="login-box" method="post" action="change_pass.php">
                <label class="text-box__label" for="new_password1">Новый пароль:</label>
                <input class="text-box__input" type="password" name="new_password1" required><br>
                <label class="text-box__label" for="new_password2">Подтвердите новый пароль:</label>
                <input class="text-box__input" type="password" name="new_password2" required><br>
                <input class="shine-button" type="submit" value="Изменить пароль">
            </form>

        </div>

      
</body>
</html>


