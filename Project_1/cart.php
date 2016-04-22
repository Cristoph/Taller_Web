<?php
include("common/head.php");
// add id product to cart
if(isset($_GET['prod_id'])){
	if(!isset($_SESSION['cart'])){
			$_SESSION['cart'] = array($_GET['prod_id']);
	}else{
			array_push($_SESSION['cart'], $_GET['prod_id']);
	};
};

if(isset($_GET['del_id'])){
	$x = array_search((int)$_GET['del_id'], $_SESSION['cart']);
	if($x !== false){
			unset($_SESSION['cart'][$x]);
			//$find = 'ok';
			$_SESSION['cart'] = array_values($_SESSION['cart']);
	};
};

	$total = 0;
	include("common/menu.php");
?>
<!-- ############################################# -->
	<div class="page-content">
		<!-- ############### breadcrumbs ################# -->
		<div class="container">
			<div class="grid">
				<?php
				//print "find=".$find."</br>";
				?>
				<ul class="breadcrumbs2 mini">
						<li><a href="home.php"><span class="icon mif-home"></span></a></li>
						<li><a href="products.php">Productos</a></li>
						<li><a href="#">Carro de Compras</a></li>
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

		<!-- #################### product ############################### -->
		<div class="container">
			<div class="grid">

				<div class="row cells5">

					<?php for ($row = 0; $row < count($_SESSION['cart']); $row++) {
							$i = (int)$_SESSION['cart'][$row];
							//echo print_r($_SESSION['cart']);
						?>
						<!-- ############### cell product ############### -->
							<div class="cell offset1 colspan3">

								<div class="cart">
										<div class="row cells3">
												<div class="cell">
													<div class="image-container">
														<div class="frame">
															<?php echo '<img src="images/'.$_SESSION['product'][$i]['image'].'">' ?>
														</div>
													</div>
												</div>
												<div class="cell colspan2">
													<div class="row">
														<div class="cell">
															<h4>
																<?php
																echo  $_SESSION['product'][$i][1];
																?>
															</h4>
															<hr class="bg-lightblue">
														</div>
													</div>
													<div class="cell">
															<h5>Valor: <span class="mif-dollar2"><?php echo $_SESSION['product'][$i]['price'] ?></span></h5>
													</div>
													<div class="cell">
														<a href="cart.php?del_id=<?php echo $_SESSION['product'][$i]['id']?>" class="button mini-button alert">Eliminar</a>

													</div>
												</div>

										</div>



								</div>

							</div>
						<!-- ############### end cell product ############### -->
					<?php
					$total += $_SESSION['product'][$i]['price'];

					} ?>
					<!-- ############################################################### -->
					<div class="row cell3">
						<div class="cell">
							<hr class="bg-lightblue">
							<div class="center">
								<form class="" action="pay.php" method="post">

								<h1>
									Total: <span class="mif-dollar2"><?php echo $total ?></span>
								</h4>
								<button class="button large-button primary" name='pay' value='<?php echo $total ?>'>
									<span class="mif-cart icon"></span> Pagar
								</button>

								</form>
							</div>
						</div>
					</div>
					<!-- ############################################################### -->
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
