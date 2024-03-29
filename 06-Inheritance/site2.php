<?php 
  class User {
    public $username;
    protected $email; // with protected is like a private but we can still use it in other classes extensions
    public $role = 'member';
    public function __construct($username, $email){
      //$this->username = 'ken';
      $this->username = $username;
      $this->email = $email;
    }
    
    public function addFriend(){
      //return "added a new friend";
      return "$this->username just added a new friend";
    }
    
    public function message(){
      return "$this->email sent a new message";
    }
    
    // getters
    public function getEmail(){
      return $this->email;
    }
    // setters
    public function setEmail($username){
      if(strpos($username, '@') > -1){
        $this->email = $username;
      };
    }
  }
  
  class AdminUser extends User {
    public $level;
    public $role = 'admin'; // override the original property value 
    public function __construct($username, $email, $level){
      parent::__construct($username, $email);
      $this->level = $level; 
    }
    public function message(){ // overide a method value
      return "this->email, an admin sent a new message";
    }
  }
  
  $userOne = new User('mario', 'mario@thenetninja.co.uk');
  $userTwo = new User('luigi', 'luigi@thenetninja.co.uk');
  $userThree = new AdminUser('yoshi', 'yoshi@thenetninja.co.uk', 5);
  
  echo $userOne->role . '<br>';
  echo $userThree->role . '<br>';
  echo $userOne->message() . '<br>';
  echo $userThree->message() . '<br>'; 
  
?>

<html lang="en">
<html>
<head>
  <title>PHP OOP</title>
</head>
<body>
  
</body>
</html>
 /*
    public: accessible from everywhere in and outside the class.
    private: only accessible within the class.
    protected: only accessible within the class and its extensions or inheritence.
  */
