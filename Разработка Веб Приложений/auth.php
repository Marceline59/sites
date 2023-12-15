<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>SetnerStore/Авторизация</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image" href="photos/icon.png">
</head>
<body>
    <div class="hamburger-menu first-menu">
    <input id="menu__toggle" type="checkbox" />
    <label class="menu__btn" for="menu__toggle">
      <span></span>
    </label>
    <ul class="menu__box">
      <li><a href = "index.php">Главная</a></li>
      <li><a href = "news.php">Новости</a></li>
      <li><a href = "catalog.php">Каталог</a></li>
      <li><a href = "contacts.php">Контакты</a></li>
      <li><a class = "active" href = "auth.php">Авторизация</a></li>
    </ul>
    </div>
    <div class="topnav">
      <a href = "index.php">Главная</a>
      <a href = "news.php">Новости</a>
      <a href = "catalog.php">Каталог</a>
      <a href = "contacts.php">Контакты</a>
      <a class = "active" href = "auth.php">Авторизация</a>
    </div>
    <form action="check_auth.php" method="post">
        <div class="login-box">
            <h1 class="auth_header">Авторизация</h1>

            <div class="textbox user_auth">
                <label class="text-box__label" aria-hidden="true">Логин</label>
                <input class="text-box__input" type="text" placeholder="Логин" name="username" value="">
            </div>

            <div class="textbox pass_auth">
                <label class="text-box__label" aria-hidden="true">Пароль</label>
                <input class="text-box__input" type="password" placeholder="Пароль" name="password" value="">
            </div>

            <input class="shine-button" type="submit" name="login" value="Войти">
        </div>
    </form>
</body>
</html>