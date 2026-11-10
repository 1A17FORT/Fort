<?
    session_start();
    if (!empty($_POST['password']) and !empty($_POST['login'])) {
        $login = $_POST['login'];
        $password = $_POST['login'];

        $query = "SELECT * FROM users WHERE login='$login' AND password='$password'";
        $res = mysqli_query($link, $query);
        $user = mysqli_fetch_assoc($res);

        if (!empty($user)) {
            $_SESSION['auth'] = true;
        }
        else {
            echo "Неверное имя пользователья или пароль";
        }
    }
