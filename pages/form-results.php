<?php var_dump($_POST);?>
<?php if(in_array("", $_POST ) || count($_POST) === 0 || checkWhiteSpace($_POST)):?>
	<section class="results">
		<inner-column>
			<h2>error</h2>
			<p>you must enter all values. hit the back button and try again</p>
		</inner-column>
	</section>
<?php endif; ?>


