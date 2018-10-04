<?php

class Book {
    public $author;
    public $title;
    public $price;
    
    public function getName(){
		return $this->title;
	}
	
	function __construct($author,$title,$price){
		$this->author = $author;
		$this->title = $title;
		$this->price = $price;
	}

    public function sell() {
        echo "{$this -> author} книга {$this -> title} продается по цене {$this -> price}<br>";

    }
}

$book = new Book("Александра Маринина","Не мешайте палачу",250);
$book->sell();

//$Book1 = new Book;
//$Book1 -> author = "Александра Маринина";
//$Book1 -> title = "Не мешайте палачу";
//$Book1 -> price = 250;
//$Book1 -> sell();

/*class Partbook extends Book {
	public $part;
	public $chapter;
	//parent:: __construct($author,$title);
	
	public function read() {
		echo "{$this -> author} книга {$this -> title} часть {$this -> part} глава {$this -> chapter} можно прочитать бесплатно<br>";
}}
$Partbook1 = new Partbook;
$Partbook1 -> author = "Александра Маринина";
$Partbook1 -> title = "Не мешайте палачу";
$Partbook1 -> part = 1;
$Partbook1 -> chapter = 1;
$Partbook1 -> read();*/