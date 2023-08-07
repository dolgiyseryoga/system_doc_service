<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="/main.css">


</head>

<body>

    <!-- Форма авторизации -->

    <form action="vendor/signin.php" method="post">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="#">Оставьте заявку на подключение</a>!
        </p>
        <?php
        if ($_SESSION['message']) {
            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
        }
        unset($_SESSION['message']);
        ?>
    </form>

    <div class="header_block4">
        <img class="header_block4_img" src="/images/others/todo.png" alt="">
    </div>

</body>

</html>