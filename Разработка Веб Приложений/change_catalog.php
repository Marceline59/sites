<?php
session_start();
include_once('main.php');
if (!isset($_SESSION["username"])) {
    header("Location: auth.php");
    exit();
}


// Редактирование 
if (isset($_POST["change_catalog"])) 
{
    $change_catalog_id = $_POST["change_catalog_id"];
    $change_catalog_name = $_POST["change_catalog_name"];
    $change_catalog_img = $_POST["change_catalog_img"];
    $change_catalog_description = $_POST["change_catalog_description"];
    $change_catalog_header = $_POST["change_catalog_header"];
    $change_catalog_art = $_POST["change_catalog_art"];
   
    $sqlec = "UPDATE `fullcatalog` SET art = '$change_catalog_art', name = '$change_catalog_name', img = '$change_catalog_img' , description = '$change_catalog_description', header = '$change_catalog_header'  WHERE id = '$change_catalog_id'";
    if ($result = mysqli_query($mysqli, $sqlec)) {
        echo "Товар успешно изменён!";
    } 
    else 
    {
        echo "Ошибка при редактировании" ;
    }
}

// Удаление
if (isset($_POST["delete_catalog"])) {
    $delete_catalog_number = $_POST["delete_catalog_number"];
    
    $sqldc = "DELETE FROM `fullcatalog` WHERE art = '$delete_catalog_number'";
    if ($result = mysqli_query($mysqli, $sqldc)) 
    {
        echo "Товар удалён!";
    } else {
        echo "Ошибка при удалении";
    }
}

// Добавление
if (isset($_POST["add_catalog"])) {
    $new_catalog_img = 'spr/' . $_POST["new_catalog_img"];
    $new_catalog_header = $_POST["new_catalog_header"];
    $new_catalog_description = $_POST["new_catalog_description"];
    $new_catalog_name = $_POST["new_catalog_name"];
    $new_catalog_art = $_POST["new_catalog_art"];



    
    $sqlac = "INSERT INTO `fullcatalog` (img, header, description, name, art) VALUES ('$new_catalog_img', '$new_catalog_header', '$new_catalog_description', '$new_catalog_name', '$new_catalog_art')";
    if ($result = mysqli_query($mysqli, $sqlac)) 
    {
        echo "Товар успешно добавлен!";
    } 
    else {
        echo "Ошибка при добавлении" ;
    }
}

// Получить список товаров 
$sqles = "SELECT * FROM `fullcatalog`";

// Запрос для получения всех товаров в форму редактирования
if (!(isset($_POST["catalog_title"]))) 
{
$first_result = mysqli_query($mysqli, $sqles);
$first_row = mysqli_fetch_row($first_result);
$selected_id = $first_row[0];
$selected_img = $first_row[1];
$selected_header = $first_row[2];
$selected_description = $first_row[3];
$selected_name = $first_row[4];
$selected_art = $first_row[5];
}

$result = mysqli_query($mysqli, $sqles);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["catalog_title"])) 
{
    // Получение выбранной новости
    $selected_title = $_POST["catalog_title"];

    // Запрос для получения данных выбранной новости
    $sql_selected = "SELECT * FROM `fullcatalog` WHERE art = '$selected_title'";
    $result_selected = mysqli_query($mysqli, $sql_selected);

    if ($result_selected->num_rows > 0) {
        // Вывод формы с текущими данными
        $row = mysqli_fetch_row($result_selected);
        $selected_id = $row[0];
        $selected_img = $row[1];
        $selected_header = $row[2];
        $selected_description = $row[3];
        $selected_name = $row[4];
        $selected_art = $row[5];
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style2.css">
    <?php include 'main.php'?>
    <title>SetnerStore/Управление_Каталогом</title>
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
            <p class = "change_title">Управление каталогом</p>
            <h3 class = "change_titles">Редактировать каталог</h3>
 

<form method="post" action="change_catalog.php">
    <label class="text-box__label change_catalog_label" for="catalog_title">Выберите товар:</label>
    <select class="text-box__input change_catalog_select" name="catalog_title" onchange="this.form.submit()">
        <?php
        // Заполнение выпадающего списка
        while ($row = mysqli_fetch_row($result)) {
            $title = $row[5];
            echo "<option value=\"$title\" ";
            echo ($selected_art == $title) ? "selected" : "";
            echo ">$title</option>";
        }
        ?>
    </select>
</form>


    <form method="post" action="change_catalog.php" class="container"> 
 
        <input type="hidden" name="change_catalog_id" id="change_catalog_id" value="<?php echo $selected_id; ?>" required><br>
        
        <label class="text-box__label change_catalog_label" for="change_catalog_img">Новая картинка товара:</label>
        <input class="text-box__input change_catalog_input" type="text" name="change_catalog_img" id="change_catalog_img" value="<?php echo $selected_img; ?>" required><br>

        <label class="text-box__label change_catalog_label" for="change_catalog_header">Новый подзаголовок товара:</label>
        <input class="text-box__input change_catalog_input" type="text" name="change_catalog_header" id="change_catalog_header" value="<?php echo $selected_header; ?>" required><br>

        <label class="text-box__label change_catalog_label" for="change_catalog_description">Новое описание товара:</label>
        <input class="text-box__input change_catalog_input" type="text" name="change_catalog_description"  id="change_catalog_description" value="<?php echo $selected_description; ?>" required><br>

        <label class="text-box__label change_catalog_label" for="change_catalog_name">Новый раздел товара:</label>
        <input class="text-box__input change_catalog_input" type="text" name="change_catalog_name"  id="change_catalog_name" value="<?php echo $selected_name; ?>" required><br>

        <label class="text-box__label change_catalog_label" for="change_catalog_art">Новый артикул товара:</label>
        <input class="text-box__input change_catalog_input" type="text" name="change_catalog_art"  id="change_catalog_art" value="<?php echo $selected_art; ?>" required><br>

        <button class="shine-button change_catalog_button" type="submit" name="change_catalog">Обновить товар</button>
    </form>
   
            <form method="POST" action="change_catalog.php" class="container">
                <h3  class = "change_titles">Удалить товар</h3>
                <label class="text-box__label change_catalog_label" for="delete_catalog_number">Выберите товар для удаления:</label>
                <select class="text-box__input change_catalog_select" name="delete_catalog_number" id="delete_catalog_number">
                    <?php  
                    $sqldel = "SELECT art FROM `fullcatalog`";
                    $resultdel = mysqli_query($mysqli, $sqldel);
                    while ($row = mysqli_fetch_row($resultdel)){ 
                    ?>
                        <option value="<?php echo $row[0]; ?>"><?php echo $row[0]; ?></option>
                    <?php } 
                    ?>
                </select><br>
                <button class="shine-button change_catalog_button" type="submit" name="delete_catalog">Удалить товар</button>
            </form>

            <form method="POST" action="change_catalog.php" class="container">
                <h3  class = "change_titles">Добавить товар</h3>

                <label class="text-box__label change_catalog_label" for="new_catalog_img">Новое изображение товара:</label>
                <input class="text-box__input change_catalog_input" type="text" name="new_catalog_img" id="new_catalog_img" required><br>
                
                <label class="text-box__label change_catalog_label" for="new_catalog_header">Новый подзаголовок товара:</label>
                <input class="text-box__input change_catalog_input" type="text" name="new_catalog_header" id="new_catalog_header" required><br>

                <label class="text-box__label change_catalog_label" for="new_catalog_description">Новое описание товара:</label>
                <input class="text-box__input change_catalog_input" type="text" name="new_catalog_description" id="new_catalog_description" required><br>

                <label class="text-box__label change_catalog_label" for="new_catalog_name">Новый раздел товара:</label>
                <input class="text-box__input change_catalog_input" type="text" name="new_catalog_name" id="new_catalog_name" required><br>

                <label class="text-box__label change_catalog_label" for="new_catalog_art">Новый артикул товара:</label>
                <input class="text-box__input change_catalog_input" type="text" name="new_catalog_art" id="new_catalog_art" required><br>

                <button class="shine-button change_catalog_button" type="submit" name="add_catalog">Добавить товар</button>
            </form>
        </div>
  
</body>
</html>
