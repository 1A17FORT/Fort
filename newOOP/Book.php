<?
class Book {
    public $title;
    public $author;
    public $year;
    public function __construct($title, $author, $year){
        $this -> title = $title;
        $this -> author = $author;
        $this -> year = $year;
    }
    public function getSummary() {
        return $this -> title . ',' . $this -> author . '(' . $this -> year . ')';
    }
}
$book = new Book ('Сайтам', 'Куроми', '2020');
echo ($book -> getSummary());
?>
