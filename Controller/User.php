<?php
class User extends Controller{

    function __construct(){

        parent::__construct();

    }

    public function index(){

    
		
		
		if (isset($_POST["loginbtn"])){
				$username= $_POST["username"];
				$pwd=$_POST["password"];
				
				if(($username=="admin") && ($pwd=="password")){
				   $message="success";
				   $_SESSION['SLOGINUSER'] =  $username;
				   
				} else {
					$message ="error";
				}
				
				
				header("location:". SITE_PATH."home");
							
		}
        $this->view->render('user');
 
    }
    function executeusers($id){
    	echo "This is Users Function and this is ID : ".$id;
   }
	function executemessage($message){
	
		if($message=="success"){
			echo "Successfully Logged";
			echo $_SESSION['SLOGINUSER'];
		} else{
		    echo "Error.. Pls Try Again";
		}
	}
	
	public function isLogin(){
		
		if($_SESSION['SLOGINUSER'] == "" || $_SESSION['SLOGINUSER'] == "logout"){
			return FALSE;
		} else {
			return TRUE;
		}
	}
	
	public function executelogout(){
		unset($_SESSION['SLOGINUSER']);
		$_SESSION['SLOGINUSER'] = "logout";
		header("location:". SITE_PATH."user");
		return TRUE;
	}
	
}