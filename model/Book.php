<?php 

class Book {
    public $title;
    public $author;
    public $pages;

    function __construct($t,$a,$p){
        $this->title = $t;
        $this->author = $a; 
        $this->pages = $p;
    }

}
?>