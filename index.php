<?php 
$page = $_GET["page"] ?? null;

//get the header
require "components/header.php";
// var_dump($_GET);
?>

<main class="site-main">
	<!-- page router for main page content -->
<?php 
switch ($page) {
	case "cars":
		include "pages/cars.php";
		break;

		case "car-detail":
		include "pages/car-detail.php";
		break;

		case "add-a-car":
		include "pages/car-form.php";
		break;

		case "site-map":
		include "pages/site-map.php";
		break;
	
	default:
		include "pages/default.php";
}
?>
</main>


<?php 
require "components/footer.php";
?>
