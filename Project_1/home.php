<?php
	include("common/head.php");
	if(isset($_GET['pay'])){
		$_SESSION['cart'] = array(); 
	};
	include("common/menu.php");
?>
<!-- ############################################# -->
<div class="page-content">
	<div class="container">
		<div class="grid">


				HOME

		</div><!-- grid -->
	</div><!-- container -->
</div> <!-- page-content -->
<!-- ############################################# -->
<?php
	include("common/footer.php")
?>
