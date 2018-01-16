<table>
	<tbody>
		<?php 
			foreach ($cats as $cat => $item) {
				echo '<tr><td>

					<div class="left-bar-item">
						<a href="index.php?item='.$item->cat.'">'.$item->cat.'</a>
					</div>

					</td></tr>';
			}
		 ?>
	</tbody>
</table>