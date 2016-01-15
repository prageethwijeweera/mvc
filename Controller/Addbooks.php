<?php
class Addbooks extends Controller{

    function __construct(){

        parent::__construct();

    }

    public function index(){
    	
    	if (isset($_POST["submitbook"])){
    		
    		 $book_name			= $_POST["book_name"];
    		 $auth_name			=$_POST["auth_name"];
    		 $publisher_name	=$_POST["publisher_name"];
    		 $isbn_number		=$_POST["isbn_number"];
    		 $price				=$_POST["price"];
    		 $amount			=$_POST["amount"];
    		
    		
    		header("location:". SITE_PATH."home");
    			
    	}
    	
    	$this->view->render('addbooks');
    }
    
	
}