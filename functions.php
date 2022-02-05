<?php 
function formatInput(mixed $input):void {
	echo "<pre>";
	var_dump($input);
	echo "</pre>";
}

//count numbers... https://www.alphacodingskills.com/php/pages/php-program-count-digits-in-a-integer.php
function countDigits($MyNum){
  $MyNum = (int)$MyNum;
  $count = 0;

  while($MyNum != 0){
    $MyNum = (int)($MyNum / 10);
    $count++;
  }
  return $count;
}

// function to calculate age of used car.. TODO. prevent erroneous values.. implement error handling
function calculateCarAge(int $year):int {
  $date = date("Y");
  if ($year <= 0) {
    return 0;
  } 
  elseif (countDigits($year) < 4 || countDigits($year) > 4 ) {
     return "enter valid 4 digit year";
  }
  else {
    // return $year - $date;
    return $date - $year;
  }
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

<?php function usedCarGenerator(string $model, string $year, string $color, array $photos, string $teaser) { ?>
	<h2>model: <?=$model?></h2>
	<ul class="car-assets">
		<li>year: <?=$year?></li>
		<li>the car age: <?=calculateCarAge($year)?> years</li>
		<li>color:<?=$color?></li>
		<li>
			<ul class="car-photos">
				<?php foreach($photos as $photo): ?>
				<li>
					<picture>
						<img src="<?=$photo?>" alt="<?=$model?>">
					</picture>
				</li>
				<?php endforeach; ?>
			</ul>
		</li>
		<li><a href="?page=car-detail"><?=$teaser?></a></li>		
	</ul>
<?php } ?>

