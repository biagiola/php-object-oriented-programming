<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>My web site<title>
</head>
<body>

	<?php  
		
		class Book { 
			var $title;
			var $author;
			var $pages;
			
			/* Constructor function 	*/
			function __constructor($aTitle, $aAuthor,$aPages){
				$this->title = $aTitle;
				$this->author = $aAuthor;
				$this->pages = $aPages;
			}		
		}
		
		$book1 = new Book("Harry Potter", "JK Rowling", 400);  
		$book2 = new Book("Lord Of the Rings", "Tolkien", 700);  

		echo $book1->title;
		echo $book2->title;
		
	?>

</body>