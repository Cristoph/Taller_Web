<?php
	include("common/head.php");
	if(isset($_GET['pay']) || !isset($_SESSION['cart']) ){
		 $_SESSION['cart'] = array();
	};
	include("common/menu.php");
?>
<!-- ############################################# -->
<div class="page-content">
	<div class="container">
		<div class="grid">

				<ul class="breadcrumbs2 mini">
						<li><a href="home.php"><span class="icon mif-home"></span></a></li>
						<li><a href="home.php">Home</a></li>
				</ul>
			</div>
		</div>

		<div class="container">
			<div class="grid">

				<div class="row">
					<div class="cell">
						<h3>
						Bienvenido a Null Store
						</h3>
					</div>
				</div>

				<div class="row">
					<div class="cell">
						<h4>
							Aqui encontraras los Null Pack del pais.
						</h4>
						<hr class="bg-lightblue">
					</div>
				</div>

			</div>
		</div>

		<div class="container">
			<div class="grid">
				<div class="row cells3">
					<!-- ############################### -->

					<div class="cell">

					</div>
					<!-- ############################### -->
					<div class="cell">
							<div>
								<h3 class="center fg-cobalt">Aprovecha esta Oferta!!</h3>
							</div>
								<div class="panel">
									<?php echo '<a href="product.php?id='.$_SESSION['product'][2]['id'].'">' ?>
											<div class="content">
												<div class="image-container">
													<div class="frame">
														<?php echo '<img src="images/'.$_SESSION['product'][2]['image'].'">' ?>
													</div>
												</div>
											</div>
											<div class="center">
												<h4><?php echo  $_SESSION['product'][2]['detail'] ?></h4>
												<button class="button primary text-shadow">Detalle</button>
											</div>
									</a>
								</div>
							</div>
					<!-- ############################### -->

					<div class="cell">

					</div>
					<!-- ############################### -->

				</div><!-- row -->
			</div><!-- grid -->
		</div><!-- container -->


		</div><!-- grid -->
	</br>
        </br>
        </br>

	</div><!-- container -->
</div> <!-- page-content -->
<!-- ############################################# -->
<?php
	include("common/footer.php")
?>
