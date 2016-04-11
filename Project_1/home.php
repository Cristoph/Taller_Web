<?php
	include("common/head.php");
	include("common/menu.php");
?>
<!-- ############################################# -->
<div class="page-content">
	<div class="container">
		<div class="grid">


			HOME
			<?php echo 'name['.$_SESSION['name'].']' ?>
			<?php echo 'logout['.$_POST['logout'].']' ?>

		</div><!-- grid -->
	</div><!-- container -->
</div> <!-- page-content -->
<!-- ############################################# -->
<?php
	include("common/footer.php")
?>
