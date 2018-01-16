<table>
    <tbody>
    <?php
    foreach ($cats as $item) { ?>
        <tr>
            <td>
                <div class="left-bar-item">
                    <a href="index.php?item=<?php echo $item['ID_CAT']; ?>"><?php echo $item['CAT'] ?></a>
                </div>
            </td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>