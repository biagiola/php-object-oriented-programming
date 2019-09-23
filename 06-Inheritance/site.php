<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>My web site<title>
</head>
<body>

	<?php  
		class Chef {
			function makeSalad(){
				echo "The chef can make salad";
			}
			function makeChiken(){
				echo "The chef can make chiken";
			}
			function makeSpecialDish(){
				echo "The chef can make bbq";
			}
		}

		class italianchef extends Chef {
			function makePasta(){
				echo "The chef can make Pasta";
			}				
		
			// rewrite inherited function
			function makeSpecialDish(){
				echo "The chef can make chiken parm";
			}
		}

		$chef = new Chef();
		$chef->makeChiken();
		$chef->makeSpecialDish();

		$italianChef = new ItalianChef();
		$italianChef->makePasta();
		$italianChef->makeChiken();
		$italianChef->makeSpecialDish();
		
	?>

</body>

/*
visibility modifiers -> public, private, etc.

public accesible para todos, tanto para leer como para modificar.

var y public son casi lo mismo.

private no se puede modificar fuera de su alcance, solo dentro de la clase.

*/

