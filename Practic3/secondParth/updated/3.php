<?
    session_start();

    if (empty($_SESSION['auth'])) {
        echo 'Вы вошли как: <b>' . ($_SESSION['login']) . '</b>';
    } else {
        echo '<a href = "Practic3.php">Авторизоваться</a>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Страница 1</h1>
<p>Секретный контент, доступный только авторизованным.</p>
</body>
</html>
