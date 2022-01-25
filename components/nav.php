<?php 
$navItems = [
	"home" => "index.php",
	"cars" => "?page=cars",
	"car-detail" => "?page=car-detail",

];
?>

<nav>
<?php foreach ($navItems as $key => $value) { ?>
	<a href="<?=$value?>"><?=$key?></a>
<?php } ?>
</nav>