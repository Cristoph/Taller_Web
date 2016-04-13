<?php
	include("common/head.php");
	include("common/menu.php");
?>
<!-- ############################################# -->
	<div class="page-content">
		<!-- ############### breadcrumbs ################# -->
		<div class="container">
			<div class="grid">
				<ul class="breadcrumbs2 mini">
						<li><a href="home.php"><span class="icon mif-home"></span></a></li>
						<li><a href="products.php">Productos</a></li>
						<li><a href="cart.php">Carro de Compras</a></li>
						<li><a href="#">Portal de Pago</a></li>
				</ul>
		</div>
	</div>
	<!-- ############################################ -->
		<div class="container">
			<div class="grid">

				<!-- <div class="row">
					<div class="cell">
						<h4>
						Productos Seleccionados
						</h4>
					</div>
				</div> -->

				<div class="row">
					<div class="cell">
						<h5>
							Seleccionamos solo lo mejores Null del pais.
						</h5>
						<hr class="bg-lightblue">
					</div>
				</div>

			</div>
		</div>

		<!-- ####################### name ############################ -->
		<div class="container">
			<div class="grid">
				<div class="row cells2">
					<!-- ############### credit card ############### -->
					<div class="cell">
						<div class="cart center">
							<img src="images/credit_card.png">
								<hr class="bg-lightblue">

								<div class="row cells1">
										<div class="cell">
											<label>Numero de Tarjeta</label>
											<div class="input-control text ">
												<span class="mif-credit-card prepend-icon"></span>
												<input type="text">
											</div>
									 </div>
							 </div>
							 <div class="row cells1">
									 <div class="cell">
										 <label>Fecha de Expiracion</label>
										 <div class="input-control text">
											 <span class="mif-calendar prepend-icon"></span>
											 <input type="text" placeholder="YY/MM">
										 </div>
									</div>
										</div>
									<div class="row cells1">
									<div class="cell">
										<label>Codigo Verificador</label>
										<div class="input-control text">
											<span class="mif-credit-card prepend-icon"></span>
											<input type="text" placeholder="CV">
										</div>
								 </div>
							</div>
					</div>
						</div>
						<!-- ############### credit card ############### -->

							<div class="cell">
								<div class="cart center">
												<h3>Jonh Smith</h3>
												<hr class="bg-lightblue">
												<h3>Total:
													<span class="mif-dollar2"><?php echo $_POST['pay'] ?></span>
												</h3>
											</br>
											<button class="button large-button primary" id='thk'>Pagar</button>
										</div>
							</div>


						</div>
				<!-- ############### end cell ############### -->
				</div><!-- row -->
			</div><!-- grid -->
		</div><!-- container -->



		<!-- ############### dialog ######################### -->
		<div data-role="dialog" id="dialog" class="padding20 dialog" data-close-button="true" data-overlay="true" data-overlay-color="op-dark" data-overlay-click-close="true" style="width: auto; height: auto; visibility: hidden; left: 550.5px; top: 291px;">
		            <h1>Compra Exitosa!</h1>
		            <h4 class="center">
		                Gracias por preferirnos
		            </h4>
		<span class="dialog-close-button"></span></div>



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
