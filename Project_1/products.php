<?php
	include("common/head.php");
	include("common/menu.php");
?>
<!-- ############################################# -->
	<div class="page-content">

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
						<hr class="bg-green">
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
									<?php echo '<a href="cerveza.php?id='.$_SESSION['product'][$row][0].'">' ?>
											<div class="content">
												<div class="image-container">
													<div class="frame">
														<img src="images/cervezas/Bottleshot-IPA.png">
													</div>
												</div>
											</div>
											<div class="center">
												<p><?php echo  $_SESSION['product'][$row][1] ?></p>
												<button class="button success text-shadow">Detalle</button>
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

				</div>

	</div>
<!-- ############################################# -->
<?php
	include("common/footer.php")
?>
