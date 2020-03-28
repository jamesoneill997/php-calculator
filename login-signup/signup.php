<main>
	<div class="wrapper-main">
		<section class="section-default">
			<h1>Signup</h1>
			<?php
				if (isset($_GET['error'])){
					if ($_GET['error'] == "emptyfields") {
						echo '<p class="error">You must fill all fields</p>';
					}

					elseif ($_GET['error'] == "invalidemail") {
						echo '<p class="error">The email entered is invalid</p>';
					}
					elseif ($_GET['error'] == "invalidusername") {
						echo '<p class="error">The username entered is invalid</p>';
					}
					elseif ($_GET['error'] == "passwordcheck") {
						echo '<p class="error">Your passwords do not match</p>';
					}
					elseif ($_GET['error'] == "invalidfields") {
						echo '<p class="error">Username and email are invalid</p>';
					}

					elseif ($_GET['error']=="nametaken") {
						echo "<p>Username and/or email already exists, please change credentials>/p>";
					}

					elseif($_GET['error']=="sqlerror"){
						echo "<p>Error with Registration, please try again>/p>";
					}

					else{
						echo "<p>Unknown error, please contact developer</p>";
					}

				}
				elseif (isset($_GET['signup'])) {
					echo "<p>Signup Successful!</p>";

				}

			?>
			<form action="includes/signup.inc.php" method="post">
				<input type="text" name="username" placeholder="Username"> <br>
				<input type="text" name="mail" placeholder="Email address"> <br>
				<input type="password" name="pwd" placeholder="Password"> <br>
				<input type="password" name="pwd-repeat" placeholder="Repeat password"> <br>

				<button type="submit" name="signup-submit">Signup</button>

			</form>
		</section>
	</div>
</main>

<?php
	require "footer.php";

?>