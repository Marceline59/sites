<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SetnerStore/Новости</title>
	<link rel="stylesheet" href="css/style.css">
  	<?php include 'main.php'?>
  	<link rel="icon" type="image" href="photos/icon.png">
</head>
<body>
	<div class="second-page">
      <div class="hamburger-menu">
        <input id="menu__toggle" type="checkbox" />
        <label class="menu__btn" for="menu__toggle">
          <span></span>
        </label>
        <ul class="menu__box">
          <li><a href = "index.php">Главная</a></li>
          <li><a class="active" href = "">Новости</a></li>
          <li><a href = "catalog.php">Каталог</a></li>
          <li><a href = "contacts.php">Контакты</a></li>
          <li><a href = "auth.php">Авторизация</a></li>
        </ul>
      </div>
      <div class="topnav">
        <a href = "index.php">Главная</a>
        <a class="active" href = "">Новости</a>
        <a href = "catalog.php">Каталог</a>
        <a href = "contacts.php">Контакты</a>
        <a href = "auth.php">Авторизация</a>
      </div>
      <!-- код второй страницы начало карусели-->
      <h2 class="news-title">Новости нашего магазина</h2>
      <!-- Slideshow container -->
      <div class="slideshow-container">
        <?php 
          $sqln = "select * from `news`"; 
          $sqlm = "select count(*) from `news`";
          $result = mysqli_query($mysqli, $sqln);
          $resultm = mysqli_query($mysqli, $sqlm);
          $count = (mysqli_fetch_row($resultm));
          while ($row = mysqli_fetch_row($result))
            { echo "
              <div class=\"mySlides fade\">
                <div class=\"numbertext\">".$row[1]." / ".$count[0]."</div>
                <img clas=\"slide-img\" src=\" ".$row[2]." \">
                <div class=\"text\">".$row[3]."</div>
              </div>";
            }
        ?>
        <!-- Full-width images with number and caption text -->

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <!-- The dots/circles -->
      <div class="dots">
        <?php 
          $sqln = "select * from `news`"; 
          $sqlm = "select count(*) from `news`";
          $result = mysqli_query($mysqli, $sqln);
          $resultm = mysqli_query($mysqli, $sqlm);
          $count = (mysqli_fetch_row($resultm));
          while ($row = mysqli_fetch_row($result))
            { echo "
              <span class=\"dot\" onclick=\"currentSlide(".$row[1].")\"></span>";
            }
        ?>
      </div>
      <!--<div class="dots">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>-->
      <script src="js/script_news.js"></script>
      <!-- конец карусели -->
      <footer class="footer sticky">
        <h5 class="footer-author">2019-2023 © Setner Store — модный интернет-магазин одежды.</h5>
        <h5 class="footer-author">Доставка по всей России. Все права защищены.</h5>
      </footer>
    </div>
</body>
</html>