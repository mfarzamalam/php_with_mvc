<?php 

include 'Book.php';

class Model {
    public function getBookDetails() {
        
        $library = array(
            "first"=>new Book('40 rules of love','Elik shafak','350'),
            "second"=>new Book('The game ','Neil strauss','468'),
            "third"=>new Book('The game ','Neil strauss','468')
        );

        return $library;
    } 

    public function getBooks($search){
        $complete = $this->getBookDetails();

        return $complete[$search];
    }
}
?>