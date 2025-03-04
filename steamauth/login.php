<?php
session_start();

require 'openid.php';

try {
    $openid = new LightOpenID('http://yourdomain.com/'); // Замените на свой домен

    if ($openid->mode == 'cancel') {
        $_SESSION['steam_error'] = "Аутентификация отменена.";
        header('Location: index.php');
        exit;
    } elseif ($openid->validate()) {
        $id = $openid->identity;
        $ptn = "/^http:\/\/steamcommunity\.com\/openid\/id\/(7[0-9]{15,25}+)$/";
        preg_match($ptn, $id, $matches);

        $steamID64 = $matches[1];
        $_SESSION['steamid'] = $steamID64;

        header('Location: index.php'); // Перенаправляем обратно на главную
        exit;
    } else {
        $_SESSION['steam_error'] = "Ошибка аутентификации.";
        header('Location: index.php');
        exit;
    }

} catch(ErrorException $e) {
    echo $e->getMessage();
}
?>