<section class="car-form">
	<inner-column>
		<h1>car form</h1>

	<!-- 	<p><mark>coming soon</mark> submit your own car for sale!</p> -->

	<?php 
	//TODO... add query string to form action.. instead of sending directly to forms page
	?>

	<form class="submit-used-car" method="POST" action="<?=htmlspecialchars("?page=form-results")?>">
		<label for="model">model
			<input type="text" name="model" id="model">
		</label>

		<label for="price">price
			<input type="text" name="price" id="price">
		</label>

		<label for="mileage">mileage
			<input type="mileage" name="mileage" id="mileage">
		</label>

		<input type="submit" name="submit">
	</form>
	</inner-column>
</section>

