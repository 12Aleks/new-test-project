<?php
session_start();
$login = $_POST['login'];
$pas = $_POST['pas'];
$mail = $_POST['mail'];

$_SESSION['user'] = $login ;
if(empty($login) || empty($pas) || empty($mail)){
    header('location: /new/new-test-project/index.php');
}


{
    $conn = new mysqli('localhost', 'Aleks', 'af7rwbh6dFxkzHYK', 'test');
    if ($conn->connect_error) {
        echo 'Error connect it server!';
    };

    $prov = "SELECT id FROM mytable WHERE login='$login' && password='$pas' && email = '$mail' ";
    $otpr = $conn->query($prov);
    $mas = [];
    if ($otpr->num_rows > 0) {
        header("location: /new/new-test-project/view.php ");
    } else {
        echo 'Error';
    }
}
