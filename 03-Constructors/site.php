<?php  

	class Book { 
		public $title;
		public $author;
		public $pages;

		// Constructor function 	
		function __constructor($aTitle, $aAuthor,$aPages){
			$this->title = $aTitle;
			$this->author = $aAuthor;
			$this->pages = $aPages;
		}
		
		public function bookAddedMessage() {
			return " $this->title book added. Written by $this->author ";
		}
	}

	$book1 = new Book("Harry Potter", "JK Rowling", 400);  
	$book2 = new Book("Lord Of the Rings", "Tolkien", 700);  

	echo $book1->title;
	echo $book1->author;
	echo $book1->bookAddedMessage();

	$book1->pages = 455; // we can change values because the class's properties are public.
	
	print_r(get_class_var("Book")) // give us all the properties of the class; print_r because it is an array
	print_r(get_class_methods("Book")) // give us all the methos of the class.


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
