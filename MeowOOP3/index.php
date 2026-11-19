<?
class User {
 private $name;
 public function  setName($name) {
    $this ->name = $name;
 }
 public function getName() {
    return $this->capeFirst($this->name);
 }
 private function capeFirst($str) {
    return ucfirst($str);
 }
}
?>
<!-- Meow -->

<?
class Student extends User {
    private $surn;
    public function setSurn($surn){
        $this->surn = $surn;
    }
    public function getSurn(){
        return $this->surn;
    }
}

class Employee extends User {
    private $surn;
    public function getSurn() {
        // return $this->capeFirst($this->surn);
    }
}
?>

<?
 class User2 {
    private $name;
    private $surn;
    public function setName2($name) {
        $this->name = $name;
    }
    public function getName2() {
        return $this->name;
    }
    public function setSurn2($surn) {
        $this->surn = $surn;
    }
    public function getSurn2() {
        return $this->surn;
    }
 }
 class Employee2 extends User2 {
    private $name;
    private $surn;
 }
 $employee1 = new Employee2();
 $employee1->setName2('ColdQ');
 $employee1->setSurn2('Great');
 $name = $employee1->getName2();
 $surn = $employee1->getSurn2();
 echo $surn . $name;
?>


<?
class Msers {
    private $name;
    public function setName4($name) {
        if ($this->notEmpty($name)) {
            $this->name = $name;
        }
    }
    public function getName4() {
        return $this->name;
    }
    protected function notEmpty($str) {
        return strlen($str) > 0;
    }
}
?>
<?
class Employee4 extends Msers {
    private $surn;
    public function setSurn4($surn) {
        if ($this->notEmpty($surn)) {
            $this->surn = $surn;
        }
    }
    public function getSurn4() {
        return $this->surn;
    }
}
$employeer2 = new Employee4();
$employeer2-> setSurn4("Newwie");
$surn2 = $employeer2->getSurn4();
echo $surn2;
?>
