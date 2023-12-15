<?php
session_start();
if (isset($_SESSION["Username"])) 
{
    header("Location: admin.php");
    exit();
}

include_once('main.php');
  
function test_input($data) {//Эти функции используются для обеспечения безопасности ввода данных, предотвращения SQL-инъекций и XSS-атак.
     
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
  
if ($_SERVER["REQUEST_METHOD"] == "POST") //Проверяется, был ли запрос выполнен методом POST
{
     
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
    
    $result = mysqli_query($mysqli, $sql3);
    

    while ($user = mysqli_fetch_row($result)) 
    {
         
        if(($user[0] == $username) && ($user[1] == $password)) 
        {   
            $_SESSION["username"] = $username;
            header("location: admin.php");
            exit();
        }
        else 
        {            
            header("location: auth.php?error");   
            die();
        }
    }
}
 
?>