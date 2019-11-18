<?php  
		
	class User {
      
      		public $username;
      		private $email;
      
      		function __contructor( $aUsername, $aEmail ) {
			this->$username = $aUsername;
        		// this->$email = $aEmail; probar este en casa
			this->setEmail($aEmail);
		}
      
      		function getEmail() {
        		return this->email;
      		}
      
      		function setEmail($email) {
			// string position, return the position of the @, if it dont have it, return 0
        		if(strpos($email, '@') > -1){
          			$this->email = $aUsername;
			}
		};
			
	}
    
	var $userOne = new User('Andres', 'andres012@gmail.com');

	echo $userOne->getEmail();
	$userOne->setEmail("davidbiagiola01@gmail.com");
	echo $userOne->getEmail();
    
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My web site<title>
</head>
<body>



</body>
</html>
/*
visibility modifiers -> public, private, etc.

var and public are practicly the same.

private, we can modify outside of his score. just inside the class
*/
