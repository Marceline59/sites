<?php
session_start();
include_once('main.php');

if (!isset($_SESSION["username"])) {
    header("Location: auth.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") //Проверяется, был ли запрос выполнен методом POST
{
    $newPassword1 = $_POST["new_password1"];
    $newPassword2 = $_POST["new_password2"];

    if ($newPassword1 == $newPassword2 ) 
    {
        $username = $_SESSION["username"];
 
        $sql_up_pass = " UPDATE admin SET password = '$newPassword1' WHERE login = '$username' ";

        if($result = mysqli_query($mysqli, $sql_up_pass))
        {  
            header("Location: admin.php?formsubmit");     
  
        } 
        else{
            echo "Ошибка: " . mysqli_error($conn);
        }
        exit();
    } 
    else 
    {
        header("Location: admin.php?unformsubmit");
    }
}

?>

