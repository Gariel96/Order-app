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
    <div class="table-responsive">
    <table class="table">
        <tbody>
        <tr>
            <td class=" tag">Name</td>
            <td class=" tag">Description</td>
            <td class="tag">Price</td>
        </tr>
        </tbody>
        <?php
        foreach ($items as $item) { ?>

            <tr>
                <td><a href="index.php?item=<?php echo $item['ITEM'] ?>"><?php echo $item['ITEM'] ?></a></td>

                <td>
                    <?php echo $item['DES'] ?>
                </td>
                <td>
                    <?php echo $item['PRICE'] ?>
                </td>
            </tr>
            <?php
        }
        ?>

    </table>
    </div>
</div>
<!-- </body>
</html> -->