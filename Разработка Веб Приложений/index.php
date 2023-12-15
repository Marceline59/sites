<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>SetnerStore/Главная</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image" href="photos/icon.png">
</head>
<body>
  <div id="main_page">
    <div class="hamburger-menu first-menu">
      <input id="menu__toggle" type="checkbox" />
      <label class="menu__btn" for="menu__toggle">
        <span></span>
      </label>
      <ul class="menu__box">
        <li><a class = "active" href = "">Главная</a></li>
        <li><a href = "news.php">Новости</a></li>
        <li><a href = "catalog.php">Каталог</a></li>
        <li><a href = "contacts.php">Контакты</a></li>
        <li><a href = "auth.php">Авторизация</a></li>
      </ul>
    </div>
    <div class="topnav">
      <a class = "active" href="">Главная</a>
      <a href = "news.php">Новости</a>
      <a href = "catalog.php">Каталог</a>
      <a href = "contacts.php">Контакты</a>
      <a href = "auth.php">Авторизация</a>
    </div>
    <header class="header">
      <div class="overlay">
        <h1 class="header-title">Setner store</h1>
      </div>
    </header>
    <section class="content">
      <div class="card">
        <img class="card-image" src="photos/Футболка-главная.png">
        <h3 class="card-title">Футболки</h3>
        <p class="card-text">В нашем ассортименте Вы найдете базовые белую и черную футболки, которые можно носить в свободной непринужденной обстановке и деловых выходов.</p>
      </div>
      <div class="card no-right-margin">
        <img class="card-image" src="photos/Бейсболка-главная.png">
        <h3 class="card-title">Бейсболки</h3>
        <p class="card-text">Летом этот головной убор сбережет от жары, а козырек защитит глаза во время отдыха или туристической поездки не хуже солнцезащитных очков.</p>
      </div>
      <div class="card">
        <img class="card-image" src="photos/Лонгслив-главная.png">
        <h3 class="card-title">Лонгсливы</h3>
        <p class="card-text">Кофта оверсайз имеет довольно длинный рукав – можно носить его навыпуск или закатать.</p>
      </div>
      <div class="card no-right-margin">
        <img class="card-image" src="photos/Худи.png">
        <h3 class="card-title">Худи</h3>
        <p class="card-text">Легкая толстовка унисекс – это отличное дополнение к стильному образу в любое время года.</p>
      </div>
    </section>
    <footer class="footer">
      <h5 class="footer-author">2019-2023 © Setner Store — модный интернет-магазин одежды.</h5>
      <h5 class="footer-author">Доставка по всей России. Все права защищены.</h5>
    </footer>
  </div>
</body>
</html>
