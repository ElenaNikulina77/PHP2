<?php

include "Book.class.php";

class Read extends Book{
	var $part;
	var $chapter;
	
	function __construct($author,$title,$part, $chapter){
		parent:: __construct($author,$title,$price);
		$this->part = $part;
		$this->chapter = $chapter;
		//parent::drive();
		$this->sell();
	}
	
    public function read() {
		echo "{$this -> author} книга {$this -> title} часть {$this -> part} глава {$this -> chapter} можно прочитать бесплатно<br>";
}}
	
	/*function drive(){
		echo "Автомобиль ".$this->name." разгоняется до скорости ".$this->speed."<br>";
	}	
}*/

$book1 = new Read("Александра Маринина","Не мешайте палачу",1,1);
$book1->read();