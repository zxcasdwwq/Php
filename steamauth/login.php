<?php
session_start();

if (isset($_POST['Ok'])) {
    // Пользователь уже залогинен
    echo "Logged in as SteamID: " . $_POST['Ok'] . "<br>";
    echo '<a href="logout.php">Выйти</a>';
} else {
    // Пользователь не залогинен
    echo '<a href="steam_auth.php">Войти через Steam</a>';
}
?>