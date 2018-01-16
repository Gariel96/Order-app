
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
