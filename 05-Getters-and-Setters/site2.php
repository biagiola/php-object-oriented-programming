<?php  
		
	class User {
      
      		public $username;
      		private $email;
      
      		function __contructor( $aUsername, $aEmail ) {
			this->$username = $aUsername;
        		this->setEmail($aEmail);
		}
      
      		function getEmail() {
        		return this->aEmail;
      		}
      
      		function setEmail() {
        		if(strpos($username, '@') > -1){
          		$this->email = $aUsername;
		};
	}
    
	var $userOne = new User('Andres', 'andres012@gmail.com');
    
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
