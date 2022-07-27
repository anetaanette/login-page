<?php
get_header();
?>

	<section class="form">
		<h1 class="form__title">Log in</h1>
		<p class="form__paragraph">Log in with your data that you received from the photographer</p>

		<form class="form__inputs">
				<input type="text" name="email" class="form__inputs-input form__inputs-mail" placeholder="E-mail">
				<input type="text" name="password" class="form__inputs-input form__inputs-password" placeholder="Password">
		</form>

		<div class="form__inline">
			<a href="#" class="form__inline-reminder">Forgot password?</a>
			<button class="form__inline-button">Log in</button>
		</div>
	</section>

<?php
get_footer();

