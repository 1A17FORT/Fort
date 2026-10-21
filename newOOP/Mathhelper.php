<?
class MathHelper{
 
public const PI = 3.14159;
private static $operationCount = 0;
public static function sum($a, $b){
 self::$operationCount++;
 return $a + $b;
}
public static function multiply($a, $b){
    self::$operationCount++;
    return $a * $b;
}
public static function getOperationCount(){
    return self::$operationCount;
}
}
echo MathHelper::multiply(4, 2);
echo MathHelper::getOperationCount();

?>
