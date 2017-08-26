<html>
<heder>
    <title>My php code</title>
    <link  rel="stylesheet" type="text/css" href="style.css">
</heder>
<body>
<div class="body">
<form class="form" action="/new/new-test-project/model.php" method="post" >
    <p>Если вы зарегестрированы: </p>
    Введите ваш логин: <input type="login" name="login"><br><br>
    Введите ваш пароль: <input type="password" name="pas"><br><br>
    Введите ваш email:<input type="email" name="mail"><br><br>
    <input type="submit" class="input">
</form>
</div>

<div class="body1">
    <form class="form" action="/new/new-test-project/registration.php" method="post" >
        <p>Если вы не зарегестрированы: </p>
        Введите ваш логин: <input type="login" name="new_login"><br><br>
        Введите ваш пароль: <input type="password" name="new_pas"><br><br>
        Введите ваш email:<input type="email" name="new_mail"><br><br>
        <input type="submit" class="input1">
    </form>
</div>
</body>
</html>