<?php 
function formatInput(mixed $input):void {
	echo "<pre>";
	var_dump($input);
	echo "</pre>";
}

// check for white space only
function checkWhiteSpace(array $inputs):int {
  foreach($inputs as $input => $string) {
      if (ctype_space($string)) {
          return 1;
      }
      return 0;
  }
}

?>

<?php function createHead($title, $description) {?>
<head>
	<title><?=$title?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles/style.css">

    <meta name="description" content="<?=$description?>">
</head>
<?php }?>

