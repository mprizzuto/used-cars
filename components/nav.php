<?php 
$navItems = [
	"home" => "index.php",
	"cars" => "?page=cars",
	"site-map" => "?page=site-map",
];
?>

<nav>
<?php foreach ($navItems as $key => $value) { ?>
	<a href="<?=$value?>"><?=$key?></a>
<?php } ?>
</nav>