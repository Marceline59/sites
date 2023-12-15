<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SetnerStore/Каталог</title>
	<link rel="stylesheet" href="css/style.css">
  <?php include 'main.php'?>
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
        <li><a class = "active" href = "">Каталог</a></li>
        <li><a href = "contacts.php">Контакты</a></li>
        <li><a href = "auth.php">Авторизация</a></li>
      </ul>
    </div>
    <div class="topnav">
      <a href = "index.php">Главная</a>
      <a href = "news.php">Новости</a>
      <a class = "active" href = "">Каталог</a>
      <a href = "contacts.php">Контакты</a>
      <a href = "auth.php">Авторизация</a>
    </div>

    <section class="content-2">

      <?php 
        $sql_futbolki = "select id, img, header, description from `fullcatalog` where name = 'Футболки'";
        $result_futbolki = mysqli_query($mysqli, $sql_futbolki);

        if ($result_futbolki->num_rows > 0) {
          echo "<h3 class=\"main-text first\">Футболки</h3>";
          while ($row = mysqli_fetch_row($result_futbolki))
            { echo "
              <div class=\"card-2\">
                <img class=\"card-image\" src=\"".$row[1]."\">
                <h3 class=\"card-title-2\">".$row[2]."</h3>
                <p class=\"card-text\">".$row[3]."</p>
              </div>";
            }
          echo "
          <div class=\"arrow\">
            <img class = \"arrow-image\" src=\"photos/arrow.png\">
          </div>";
        }

        $sql_caps = "select id, img, header, description from `fullcatalog` where name = 'Бейсболки'";
        $result_caps = mysqli_query($mysqli, $sql_caps);

        if ($result_caps->num_rows > 0) {
          echo "<h3 class=\"main-text\">Бейсболки</h3>";
          while ($row = mysqli_fetch_row($result_caps))
            { echo "
              <div class=\"card-2\">
                <img class=\"card-image\" src=\"".$row[1]."\">
                <h3 class=\"card-title-2\">".$row[2]."</h3>
                <p class=\"card-text\">".$row[3]."</p>
              </div>";
            }
          echo "
          <div class=\"arrow\">
            <img class = \"arrow-image\" src=\"photos/arrow.png\">
          </div>";
        }

        $sql_hoodie = "select id, img, header, description from `fullcatalog` where name = 'Худи'";
        $result_hoodie = mysqli_query($mysqli, $sql_hoodie);

        if ($result_hoodie->num_rows > 0) {
          echo "<h3 class=\"main-text\">Худи</h3>";
          while ($row = mysqli_fetch_row($result_hoodie))
            { echo "
              <div class=\"card-2\">
                <img class=\"card-image\" src=\"".$row[1]."\">
                <h3 class=\"card-title-2\">".$row[2]."</h3>
                <p class=\"card-text\">".$row[3]."</p>
              </div>";
            }
          echo "
          <div class=\"arrow\">
            <img class = \"arrow-image\" src=\"photos/arrow.png\">
          </div>";
        }

        $sql_longsleeve = "select id, img, header, description from `fullcatalog` where name = 'Лонгсливы'";
        $result_longsleeve = mysqli_query($mysqli, $sql_longsleeve);

        if ($result_longsleeve->num_rows > 0) {
          echo "<h3 class=\"main-text\">Лонгсливы</h3>";
          while ($row = mysqli_fetch_row($result_longsleeve))
            { echo "
              <div class=\"card-2\">
                <img class=\"card-image\" src=\"".$row[1]."\">
                <h3 class=\"card-title-2\">".$row[2]."</h3>
                <p class=\"card-text\">".$row[3]."</p>
              </div>";
            }
          echo "
          <div class=\"arrow\">
            <img class = \"arrow-image\" src=\"photos/arrow.png\">
          </div>";
        }

        $sql_also = "select id, img, header, description from `fullcatalog` where name = 'Также'";
        $result_also = mysqli_query($mysqli, $sql_also);

        if ($result_also->num_rows > 0) {
          echo "<h3 class=\"main-text\">В наличии также есть</h3>";
          while ($row = mysqli_fetch_row($result_also))
            { echo "
              <div class=\"card-2\">
                <img class=\"card-image\" src=\"".$row[1]."\">
                <h3 class=\"card-title-2\">".$row[2]."</h3>
                <p class=\"card-text\">".$row[3]."</p>
              </div>";
            }
          echo "
          <div class=\"arrow\">
            <img class = \"arrow-image\" src=\"photos/arrow.png\">
          </div>";
        }
      ?>
    </section>
    <footer id="colorer" class="footer">
      <h5 class="footer-author">2019-2023 © Setner Store — модный интернет-магазин одежды.</h5>
      <h5 class="footer-author">Доставка по всей России. Все права защищены.</h5>
    </footer>
  </div>
</body>
</html>