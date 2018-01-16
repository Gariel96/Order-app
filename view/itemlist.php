<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.tag
		{
			border:2px solid blue ;
			background-color: lightblue;
		}
		
	</style>
</head>
<body> -->
	<div class="container">
		<table>
			<tbody><tr ><td class="col-md-4 tag">Name</td><td class="col-md-4 tag" >NSS</td><td class="col-md-4 tag">Description</td><td class="col-md-4 tag">Price</td></tr></tbody>

			


			<?php 

				foreach ($items as $name => $item) {
					echo '<tr><td><a href="index.php?item='.$item->name.'">'.$item->name.'</a></td><td>'.$item->nss.'</td><td>'.$item->des.'</td><td>'.$item->price.'</td></tr>';
				}
			 	?>
		</table>
	</div>
<!-- </body>
</html> -->