<?
$host = 'localhost';
$user = 'root';
$pass = '';
$name='Furr';
$link = mysqli_connect($host, $user, $pass, $name);
?>
<?
$query = "SELECT * FROM Users";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
?>
<?
$result = '';
foreach ($data as $elem){
    $result .= '<p>';

    $result .= '<b>' . $elem['name'] . '</b>';
    $result .= '<b>' . $elem['age'] . '</b>';
    $result .= '<b>' . $elem['salary'] . '</b>';

    $result .= '</p>';
}
echo $result;
?>

<?
foreach ($data as $elem):?>
<p>
<b><?$elem['name']?></b>
<b><?$elem['age']?></b>
<b><?$elem['salary']?></b>
</p>
<? endforeach; ?>

<? foreach($data as $elem): ?>
    <div>
        <h2><? echo $elem['name'] ?></h2>
        <p>
            <? echo $elem['age'] ?> years, <b>$<? echo $elem['salary'] ?></b>
        </p>
    </div>
<? endforeach ?>
<table>
<?foreach($data as $elem): ?>
<tr>
    <th><? echo $elem['id'] ?></th>
    <th><? echo $elem['name'] ?></th>
    <th><? echo $elem['age'] ?></th>
    <th><? echo $elem['salary'] ?></th>
</tr>
<? endforeach ?>
</table>
<? $del = $_GET['del']; ?>
<? $query = "DELETE FROM Users WHERE id = $del"; ?>
<? mysqli_query($link, $query) or die(mysqli_errno($link)); ?>
