<?php 
	require "header.php";
?>

<main>
	<div class="wrapper-main">
		<section class="section-default">
			<?php
				if (isset($_SESSION['username'])) {
					echo "<p>You are logged in</p>";
				}
				else{
					echo "<p>You are logged out</p>";

				}
			  ?>

			  <?php
			  	if (isset($_GET['logout'])) {
			  		if ($_GET['logout'] == "true") {
			  			session_unset();
						session_destroy();
						header("Location: index.php");
			  		}

			  	}

			  ?>
			
			
		</section>
	</div>
</main>

<?php
	require "footer.php";

?>