<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SetnerStore/Контакты</title>
	<link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image" href="photos/icon.png">
</head>
<body>
	<div class="hamburger-menu">
      <input id="menu__toggle" type="checkbox" />
      <label class="menu__btn" for="menu__toggle">
        <span></span>
      </label>
      <ul class="menu__box">
        <li><a href = "index.php">Главная</a></li>
        <li><a href = "news.php">Новости</a></li>
        <li><a href = "catalog.php">Каталог</a>
        <li><a class = "active" href = "">Контакты</a></li>
        <li><a href = "auth.php">Авторизация</a></li>
      </ul>
    </div>
    <div class="topnav">
      <a href = "index.php">Главная</a>
      <a href = "news.php">Новости</a>
      <a href = "catalog.php">Каталог</a>
      <a class = "active" href = "">Контакты</a>
      <a href = "auth.php">Авторизация</a>
    </div>
    <main>
      <div class="description">
        <h1 class="description-headline">Контактная информация</h1>
        <p class="description-text">Свяжитесь с нами, если у вас есть вопросы или предложения по сотрудничеству. Мы всегда рады новым знакомствам.</p>
      </div>
      <div class="contacts-block">
        <div class="contacts-block-half">
          <table class="table">
            <caption class="table-header">Наши филиалы</caption>
            <thead>
              <th>Setner Store в Перми</th>
              <th>Setner Store в Москве</th>
            </thead>
            <tbody>
              <tr>
                <td>+7 (571) 313-48-88</td>
                <td>+7 (473) 438-85-86</td>
              </tr>
              <tr>
                <td>info@stnr-prm.ru</td>
                <td>info@stnr-msk.ru</td>
              </tr>
              <tr>
                <td>iMALL Эспланада</td>
                <td>ГУМ</td>
              </tr>
              <tr>
                <td>Петропавловская улица, 73А</td>
                <td>Красная площадь, 3</td>
              </tr>
            </tbody>
          </table>
          <div class="left-side">
            <!-- <h3 class="contacts-block-headline" id="contactSpb">Setner Store на Wildberries</h3> <br> <p>www.wildberries.ru/brands/setner </p> -->
            <script type="text/javascript">
            function getDate()
            {
                var date = new Date();
                
                var hours = date.getHours();
                var minutes = date.getMinutes();
                var seconds = date.getSeconds();
                var dayOfWeek = ["Воскресенье","Понедельник","Вторник","Среда","Четверг","Пятница","Суббота"]
                var days = date.getDay();

                if(seconds < 10){seconds = '0' + seconds;}
                if(minutes < 10){minutes = '0' + minutes;}
                if(hours < 10){hours = '0' + hours;}
                var day = document.getElementById("dayOfWeek");

                document.getElementById('clock').innerHTML = hours + ':' + minutes + ':' + seconds;
                day.innerHTML = dayOfWeek[days];
            }
            setInterval(getDate, 0);
            </script>
            <div class="clockpage">
              <span id="dayOfWeek"></span>
              <span id="clock"></span>
            </div>
          </div>
        </div>
        <form class="contacts-block-half contacts-block__form-wrapper">
          <h3 class="contacts-block-headline">Обратная связь</h3>
          <div class="contacts-block__form-item-wrapper">
            <span class="contacts-block__form-item-name">Представьтесь</span>
            <input class="contacts-block__form-item" type="text" placeholder="ФИО">
          </div>
          <div class="contacts-block__form-item-wrapper">
            <span class="contacts-block__form-item-name">E-mail</span>
            <input class="contacts-block__form-item" type="email"  placeholder="rogozhnickov.daniil@yandex.ru">
          </div>
          <div class="contacts-block__form-item-wrapper">
            <span class="contacts-block__form-item-name">Телефон</span>
            <input class="contacts-block__form-item phone-form" type="text" placeholder="+7 900 000 00 00">
          </div>
          <div class="contacts-block__form-item-wrapper">
            <span class="contacts-block__form-item-name">Ваше сообщение</span>
            <input class="contacts-block__form-item contacts-block__form-item_text" type="text" placeholder="Текст" optional="">
          </div>
          <button class="contacts-block__submit js--job-form-submit" type="button">Отправить</button>
        </form>
      </div>
    </main>
    <footer class="footer ">
      <h5 class="footer-author">2019-2023 © Setner Store — модный интернет-магазин одежды.</h5>
      <h5 class="footer-author">Доставка по всей России. Все права защищены.</h5>
    </footer>
</body>
</html>