<?php  

	class Movie {
		public $title;  
		private $rating; // we can modify it inside the class but outside not and even see it directly (via a method, yes).

		function __constructor($argTitle, $argRating) {
			$this->title = $argTitle;
			//$this->rating = $aRating;
			$this->setRating($argRating); //before to save we have to pass by the function 
		}

		// acceess modifier or visibility modifier
		function getRating() {
			return $this->rating;
		}

		function setRating( $argRating ) {
			if( $argRating == "PG-13" || $argRating == "G" || $argRating == "PG" || $argRating == "R" ) {
				$this->rating = $argRating;
			} else {
				$this->rating = "NR";
			}
		}
	}

	$avengers = new Movie("Avengers", "PG-13");

	echo $avengers->rating; //this throw an error becouse it's private variable

	echo $avengers->getRating(); //to see
	$avengers->setRating("Dog"); //to modify

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
visibility modifiers -> public, private, static, etc.

var and public are practicly the same.

private, we can modify outside of his score. just inside the class
*/

