<?php
class View{
   
    public function render($name){

    	
    	
    	include_once ('Controller/User.php');
    	$userlog     = new User();
    	$userlog->isLogin();
    	
	    	if($userlog->isLogin() == FALSE){
	    		include_once('views/header/header_loging.php');
	    		include_once ('Views/pages/user.php');
	    	} else
	    	{
	    		if ($name != "user"){
	    			require('views/header/header.php');
	    			
	    			require('Views/pages/'.$name.'.php');
	    		}else{
	    			require('views/header/header.php');
	    			
	    			include_once ('Views/pages/home.php');
	    		}
	    	}
	    	require('views/footer/footer.php');
        }

}

