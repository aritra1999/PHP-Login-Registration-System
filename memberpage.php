<?php require('includes/config.php'); 

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); exit(); }

//define page title
$title = 'Members Page';

//include header template
require('layout/header.php'); 
?>

<div class="containerq">

		<div class="row">
				<h2> Welcome <?php echo htmlspecialchars($_SESSION['username'], ENT_QUOTES); ?></h2>
				<a href='logout.php' class="btn btn-warning right">Logout</a>
				
				<hr>
		</div>



</div>

<?php 
//include header template
require('layout/footer.php'); 
?>
