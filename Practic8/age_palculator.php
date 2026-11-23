<form action="" method="post">
    <input type="date" name="birth">
    <input type="submit">
</form>
<?
$birth = $_POST['birth'];
if ($birth > date('Y-m-d')) {
    echo 'Net takogo wozrosta';
}
$diff = (new DateTime($birth))->diff(new DateTime('today'));
echo "Wam $diff->y let";
?>
