<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>My web site<title>
</head>
<body>

	<?php  
	
    class Book {  	    // creating book's template, a class 
        var $title;
        var $author;
        var $pages;
    }
		
    $book1 = new Book;  // creating the actual book/creating the object, a instance of a class 
    $book1 -> title = "Harry Potter";
    $book1 -> author = "JK Rowling";
    $book1 -> pages = 400;

    $book2 = new Book;  
    $book2 -> title = "Lord of the Rings";
    $book2 -> author = "Tolkien";
    $book2 -> pages = 700;

    echo $book1->title;
    echo $book1->author;
    echo $book2->title;
    echo $book2->author;

    class Student {
        var $name;
        var $age;
        var $gpa;
        var $carrea;
    }

	?>

</body>