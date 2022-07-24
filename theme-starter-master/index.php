<?php
get_header();
?>

	<body>
	<main>
		<h1>Log in</h1>
		<p>Log in with your data that you received from the photographer</p>

		<section class="flex flex-inputs">
			<label>
				<input type="text" name="email" class="input-mail" placeholder="E-mail">
			</label>
			<label>
				<input type="text" name="password" class="input-password" placeholder="Password">
			</label>
		</section>

		<section class="flex flex-inline">
			<a href="#">Forgot password?</a>
			<button class="button">Log in</button>
		</section>
	</main>
	</body>

<?php
get_footer();
