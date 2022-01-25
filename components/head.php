<?php require_once "./functions.php";?>

<?php 
switch($page) {
	case "cars";
	createHead("cars page", "this is the cars page");
	break;

	case "car-detail";
	createHead("car details", "the car detail page");
	break;

	default: 
	createHead("homepage", "this is the homepage");
}

 ?>