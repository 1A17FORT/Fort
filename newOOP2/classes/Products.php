<?

class Products {
    public $name;
    public $price;

    public $cpu;
    public $numPages;

    public function __construct($name, $price, $cpu = null, $numPages = null)
    {
        $this->name =$name;
        $this->price =$price;
        $this->cpu =$cpu;
        $this->numPages =$numPages;
    }
    
    public function getCpu()
    {
        return $this->numPages;
    }

    public function getNumPages()
    {
        return $this->numPages;
    }

    public function getProduct ($tupe = 'notebook')
    {
        $out =
        "<hr> O tovare: <br>
        Naimenovanie: {$this->name} <br>
        Sena: {$this->price} <br>";
        if ($tupe == 'notebook') {
            $out.="Processor: {$this->cpu} <br>";
        } else {
            $out.="Kol-vo stranis: {this->numPages} <br>";
        } return $out;
    }
}
?>
