<?php
session_start();
include_once('main.php');
if (!isset($_SESSION["username"])) {
    header("Location: auth.php");
    exit();
}


// Редактирование 
if (isset($_POST["change_news"])) 
{
    $change_news_id = $_POST["change_news_id"];
    $change_news_name = $_POST["change_news_name"];
    $change_news_img = $_POST["change_news_img"];
    $change_news_text = $_POST["change_news_text"];
   
    $sqlec = "UPDATE `news` SET number = '$change_news_name', img = '$change_news_img' , text = '$change_news_text'  WHERE number = '$change_news_name'";
    if ($result = mysqli_query($mysqli, $sqlec)) {
        echo "Новость успешно изменена!";
    } 
    else 
    {
        echo "Ошибка при редактировании" ;
    }
}

// Удаление
if (isset($_POST["delete_news"])) {
    $delete_news_number = $_POST["delete_news_number"];
    
    $sqldc = "DELETE FROM `news` WHERE number = '$delete_news_number'";
    if ($result = mysqli_query($mysqli, $sqldc)) 
    {
        echo "Новость удалена!";
    } else {
        echo "Ошибка при удалении";
    }
}

// Добавление
if (isset($_POST["add_news"])) {
    $new_news_img = 'spr/' . $_POST["new_news_img"];
    $new_news_name = $_POST["new_news_name"];
    $new_news_text = $_POST["new_news_text"];

    
    $sqlac = "INSERT INTO `News` (number, img, text) VALUES ('$new_news_name', '$new_news_img', '$new_news_text')";
    if ($result = mysqli_query($mysqli, $sqlac)) 
    {
        echo "Новость успешно добавлена!";
    } 
    else {
        echo "Ошибка при добавлении" ;
    }
}

// Получить список новостей 
$sqles = "SELECT * FROM `news`";

// Запрос для получения всех новостей в форму редактирования
if (!(isset($_POST["news_title"]))) 
{
$first_result = mysqli_query($mysqli, $sqles);
$first_row = mysqli_fetch_row($first_result);
$selected_id = $first_row[0];
$selected_img = $first_row[2];
$selected_title = $first_row[1];
$selected_text = $first_row[3];
}

$result = mysqli_query($mysqli, $sqles);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["news_title"])) 
{
    // Получение выбранной новости
    $selected_title = $_POST["news_title"];

    // Запрос для получения данных выбранной новости
    $sql_selected = "SELECT * FROM `news` WHERE number = '$selected_title'";
    $result_selected = mysqli_query($mysqli, $sql_selected);

    if ($result_selected->num_rows > 0) {
        // Вывод формы с текущими данными
        $row = mysqli_fetch_row($result_selected);
        $selected_id = $row[0];
        $selected_img = $row[2];
        $selected_title = $row[1];
        $selected_text = $row[3];
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style2.css">
    <?php include 'main.php'?>
    <title>SetnerStore/Управление_Новостями</title>
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
            <p class = "change_title">Управление новостями</p>
            <h3 class = "change_titles">Редактировать новость</h3>
 

<form method="post" action="change_news.php">
    <label class="text-box__label change_news_label" for="news_title">Выберите новость:</label>
    <select class="text-box__input change_news_select" name="news_title" onchange="this.form.submit()">
        <?php
        // Заполнение выпадающего списка
        while ($row = mysqli_fetch_row($result)) {
            $title = $row[1];
            echo "<option value=\"$title\" ";
            echo ($selected_title == $title) ? "selected" : "";
            echo ">$title</option>";
        }
        ?>
    </select>
</form>


    <form method="post" action="change_news.php" class="container"> 
 
        <input type="hidden" name="change_news_id" id="change_news_id" value="<?php echo $selected_id; ?>" required><br>
        
        <label class="text-box__label change_news_label" for="change_news_name">Новый номер:</label>
        <input class="text-box__input change_news_input" type="text" name="change_news_name" id="change_news_name" value="<?php echo $selected_title; ?>" required><br>

        <label class="text-box__label change_news_label" for="change_news_img">Новая картинка:</label>
        <input class="text-box__input change_news_input" type="text" name="change_news_img"  id="change_news_img" value="<?php echo $selected_img; ?>" required><br>

        <label class="text-box__label change_news_label" for="change_news_text">Новый текст:</label>
        <textarea class="text-box__input change_news_input" name="change_news_text" id="change_news_text" rows="4" required><?php echo $selected_text; ?></textarea><br>

        <button class="shine-button change_news_button" type="submit" name="change_news">Обновить новость</button>
    </form>
   
            <form method="POST" action="change_news.php" class="container">
                <h3  class = "change_titles">Удалить новость</h3>
                <label class="text-box__label change_news_label" for="delete_news_number">Выберите новость для удаления:</label>
                <select class="text-box__input change_news_select" name="delete_news_number" id="delete_news_number">
                    <?php  
                    $sqldel = "SELECT number FROM `news`";
                    $resultdel = mysqli_query($mysqli, $sqldel);
                    while ($row = mysqli_fetch_row($resultdel)){ 
                    ?>
                        <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; ?></option>
                    <?php } 
                    ?>
                </select><br>
                <button class="shine-button change_news_button" type="submit" name="delete_news">Удалить новость</button>
            </form>

            <form method="POST" action="change_news.php" class="container">
                <h3  class = "change_titles">Добавить новость</h3>

                <label class="text-box__label change_news_label" for="new_news_img">Новое изображение:</label>
                <input class="text-box__input change_news_input" type="text" name="new_news_img" id="new_news_img" required><br>
                
                <label class="text-box__label change_news_label" for="new_news_name">Новый номер новости:</label>
                <input class="text-box__input change_news_input" type="text" name="new_news_name" id="new_news_name" required><br>

                <label class="text-box__label change_news_label" for="new_news_text">Новый текст новости:</label>
                <input class="text-box__input change_news_input" type="text" name="new_news_text" id="new_news_text" required><br>

                <button class="shine-button change_news_button" type="submit" name="add_news">Добавить новость</button>
            </form>
        </div>
  
</body>
</html>
