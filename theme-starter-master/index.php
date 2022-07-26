<?php
get_header();
?>

	<body>
	<main class="container">
		<h1 class="container_title">Log in</h1>
		<p class="container_paragraph">Log in with your data that you received from the photographer</p>

		<form class="container_form-flex form_inputs-flex">
				<input type="text" name="email" class="form-input input-mail" placeholder="E-mail">
				<input type="text" name="password" class="form-input input-password" placeholder="Password">
		</form>

		<section class="container_section-flex flex-inline">
			<a href="#" class="flex-inline-reminder">Forgot password?</a>
			<button class="flex-inline-button">Log in</button>
		</section>
	</main>
	</body>

<?php
get_footer();
