<?php 

include 'Book.php';

class Model {
    public function getBookDetails() {
        
        $library = array(
            "40 rules of love"=>new Book('40 rules of love','Elik shafak','350'),
            "The game"=>new Book('The game ','Neil strauss','468'),
            "Subtle art of not giving a fuck"=>new Book('Subtle art of not giving a fuck','Mark manson','270')
        );

        return $library;
    } 

    public function getBooks($search){
        $complete = $this->getBookDetails();

        return $complete[$search];
    }
}
?>