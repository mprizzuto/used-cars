<?php 
require "./database/site-map-data.php";
?>

<section class="site-map">
	<inner-column>
		<h1>site map</h1>
		<ul class="site-list">
		<?php foreach ($siteData as $data):?>
			<?php foreach($data as $data => $value): ?>
				<li><a href="<?=$value?>"><?=$data?></a></li>
			<?php endforeach; ?>
		<?php endforeach; ?>
		</ul>
	</inner-column>
</section>