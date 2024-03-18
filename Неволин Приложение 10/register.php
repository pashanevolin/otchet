<?php
    session_start();
    if ($_SESSION['dannie_registracii']) {
        header('Location: profile.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

    <!-- Форма регистрации -->

    <form action="signup.php" method="post">
        <label>Фамилия</label>
        <input type="text" name="full_name1">
        <label>Имя</label>
        <input type="text" name="full_name2">
        <label>Отчество</label>
        <input type="text" name="full_name3">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Почта</label>
        <input type="text" name="email">
       
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        
        <button type="submit">Войти</button>
        <p>
            У вас уже есть аккаунт? - <a href="/">авторизируйтесь</a>!
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>