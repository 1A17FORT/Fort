<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <? if (empty(trim($_POST['name'])) || empty(trim($_POST['email']))):?>
        <? if (!empty($_POST)): ?>
            <P> Поля обязательны для заполнения!</p>
        <? endif; ?>
        <form method="post">
            <p>Name: <input type="text" name="name"> </p>
            <p>Email: <input type="email" name="email"> </p>

            <p> <button type="submit" name="send">Send</button></p>
        </form>
        <? else: ?>
            <p>Name: <?  $_POST['name']?>?</p>
            <p>Email: <? $_POST['email']?>?</p>
            <? endif; ?>
</body>
</html>
