<?php 

include ('model/Model.php');

class controller {

    public $model;

    public function __construct()
    {
        $this->model = new Model();    
    }

    public function invoke() {
        if(!isset($_GET['book'])){
            $books = $this->model->getBookDetails();
            include './view/booklist.php'; 
        }
        else {
            $book = $this->model->getBooks($_GET['book']);
            include './view/viewbook.php';
        }
    }
}

?>