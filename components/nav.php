<?php 
$navItems = [
	"home" => "index.php",
	"cars" => "?page=cars",
	"site-map" => "?page=site-map",
	"submit-a-car" => "?page=add-a-car",
];
?>

<nav>
<?php foreach ($navItems as $key => $value) { ?>
	<a href="<?=$value?>"><?=$key?></a>
<?php } ?>
</nav>