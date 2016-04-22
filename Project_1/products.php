<?php
	include("common/head.php");
	include("common/menu.php");
?>
<!-- ############################################# -->
	<div class="page-content">
		<div class="container">
			<div class="grid">
				<ul class="breadcrumbs2 mini">
						<li><a href="home.php"><span class="icon mif-home"></span></a></li>
						<li><a href="products.php">Productos</a></li>
						<li><a href="products.php">Pack</a></li>
				</ul>
			</div>
		</div>

		<div class="container">
			<div class="grid">

				<div class="row">
					<div class="cell">
						<h3>
						Nuestros Productos
						</h3>
					</div>
				</div>

				<div class="row">
					<div class="cell">
						<h4>
							Seleccionamos solo lo mejores Null del pais.
						</h4>
						<hr class="bg-lightblue">
					</div>
				</div>

			</div>
		</div>

		<!-- #################### product ############################### -->
		<div class="container">
			<div class="grid">
				<div class="row cells3">
					<?php for ($row = 0; $row < count($_SESSION['product']); $row++) { ?>
						<!-- ############### cell product ############### -->
							<div class="cell">
								<div class="panel">
									<?php echo '<a href="product.php?id='.$_SESSION['product'][$row]['id'].'">' ?>
											<div class="content">
												<div class="image-container">
													<div class="frame">
														<?php echo '<img src="images/'.$_SESSION['product'][$row]['image'].'">' ?>
													</div>
												</div>
											</div>
											<div class="center">
												<h4><?php echo  $_SESSION['product'][$row]['detail'] ?></h4>
												<button class="button primary text-shadow">Detalle</button>
											</div>
									</a>
								</div>
							</div>
						<!-- ############### end cell product ############### -->
					<?php } ?>
				</div><!-- row -->
			</div><!-- grid -->
		</div><!-- container -->
		<!-- #################### end product ############################### -->
				<div>
					</br>
					</br>
					</br>
					</br>
			</div>

	</div>
<!-- ############################################# -->
<?php
	include("common/footer.php")
?>
