!
<?php
$host = 'localhost';
$db   = 'test';
$user = 'root';
$pass = 'root';
$charset = 'utf8';

$dsn = "mysql:host=$host; dbname=$db; charset=$charset";

$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $opt);
    echo "DB is connected";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$res = $pdo->query('SELECT salary FROM users');

while ($row = $res->fetch()) {
    echo '<p>' . $row['salary'] . '</p>';
}
$res = $pdo->query('SELECT name, age FROM users');

while ($row = $res->fetch()) {
    echo '<p>' . $row['name'] . ': ' . $row['age'] . '</p>';
}
$age = "1 OR 1=1";

$res = $pdo->query("SELECT * FROM users WHERE age = $age");
$res->execute([$age]);

while ($row = $res->fetch()) {
    var_dump($row);
}
$age1 = 25;
$age2 = 35;

$res = $pdo->prepare('SELECT * FROM users WHERE age = ? OR age = ?');
$res->execute([$age1, $age2]);
$res = $pdo->prepare('SELECT * FROM users WHERE name = :name1 OR name = :name2');
$res->execute(['name1' => $name1, 'name2' => $name2]);
$res = $pdo->query('SELECT age FROM users');

while ($row = $res->fetch()) {
    echo '<p>' . $row['age'] . '</p>';
}
$res = $pdo->query('SELECT * FROM users');

while ($row = $res->fetch()) {
    var_dump($row);
}
$res = $pdo->query('SELECT * FROM users');
$row = $res->fetch();
var_dump($row); // первый ряд
$newData = [
    ['name' => 'user1', 'salary' => 600],
    ['name' => 'user2', 'salary' => 1200],
    ['name' => 'user3', 'salary' => 800],
];

$res = $pdo->prepare('UPDATE users SET salary = ? WHERE name = ?');

foreach ($newData as $item) {
    $res->execute([$item['salary'], $item['name']]);
}

echo "Updated";
$res = $pdo->query('SELECT * FROM users WHERE salary = 500');

while ($row = $res->fetch()) {
    var_dump($row);
}
$res = $pdo->query('SELECT * FROM users WHERE id IN (1, 2, 3, 4, 5) LIMIT 2 OFFSET 2');

while ($row = $res->fetch()) {
    var_dump($row);
}
?>
<?
?>
