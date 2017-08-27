<link  rel="stylesheet" type="text/css" href="style.css">
<?php
$login = $_POST['new_login'];
$pas = $_POST['new_pas'];
$mail = $_POST['new_mail'];


$conn = new mysqli('localhost', 'Aleks', 'af7rwbh6dFxkzHYK', 'test');
if($conn->connect_error){
    echo 'Error connect it server!';
}
$dbase = "SELECT id FROM mytable WHERE email='$mail'";
$rez = $conn->query($dbase);
 if($rez->num_rows > 0) {
   die('<p class="text">' . 'Пользователь с почтовым адресом'. ' ' . '<b class="text1">' . $mail . '</b>' . ' ' .'уже существует!!!'. '</p>');
}else{
$new_data = "INSERT INTO mytable (login, password, email) VALUES('$login', '$pas', '$mail')";
if ($conn->query($new_data) === FALSE) {
    echo '<p class="text1">Sorry, data is not added</p>';
}else{
    echo '<p class="text">Поздравляем, вы зарегестрировались!</p>';
    echo "<a href='index.php'>"."<input class='input1' value='Перейти к авторизации'>". "</a>";
}}