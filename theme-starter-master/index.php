<?php
get_header();
?>

	<section class="form">
		<h1 class="form_title">Log in</h1>
		<p class="form_paragraph">Log in with your data that you received from the photographer</p>

		<form class="form_inputs">
				<input type="text" name="email" class="form_inputs-input inputs-mail" placeholder="E-mail">
				<input type="text" name="password" class="form_inputs-input inputs-password" placeholder="Password">
		</form>

		<div class="form_inline">
			<a href="#" class="form_inline-reminder">Forgot password?</a>
			<button class="form_inline-button">Log in</button>
		</div>
	</section>

<?php
get_footer();

