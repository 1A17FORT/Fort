<?
    session_start();
    if (!empty($_SESSION['flash'])) {
        echo $_SESSION['flash'];
        unset($_SESSION['flash']);
    } else {
        echo "Вы не авторизованы";
    }
?>
