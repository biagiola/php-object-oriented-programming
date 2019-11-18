<?php  

	class Student {
		var $name;
		var $major;
		var $gpa;

		function __constructor( $argName, $argMajor, $argGpa ) {
			$this->name = $argName;
			$this->major = $argMajor;
			$this->gap = $argGpa;
		}

		function hasHonors(){
			if( $this->gpa >= 3.5 ) {
				return true;
			} else{
				return false;
			}		
		}	
	}

	$student1 = new Student("Mike", "Business", 2.8);
	$student2 = new Student("Pam", "Art", 2.6);

	echo $student1->hasHonors(); 

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
