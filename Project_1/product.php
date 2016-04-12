<?php
	include("common/head.php");
	include("common/menu.php");
?>
<!-- ############################################# -->

<div class="page-content">

  <div class="container">
    <div class="grid">
      <ul class="breadcrumbs mini">
                          <li><a href="home.php"><span class="icon mif-home"></span></a></li>
                          <li><a href="products.php">Productos</a></li>
                          <li><a href="#"></a>Pack</li>
                          <li><a href="#"><?php echo $_SESSION['product'][1] ?></a></li>
                      </ul>
                    </div>
  </div>

  <div class="container">
    <div class="grid">

      <div class="row cells3">
        <div class="cell colspan2">

          <h3><?php echo $_SESSION['product'][1] ?></h3>
          <hr class="bg-lightblue">

          <div class="row cells2">
            <div class="cell">
              <div class="rating" data-role="rating" data-size="normal" data-value="<?php echo $_SESSION['product'][4] ?>"></div>
            </div>

            <div class="cell">
              <p>Stock disponible: <span><?php echo $_SESSION['product'][3] ?> unidades</span></p>
            </div>
          </div>

          <hr class="bg-lightblue">
          <!--blockquote-->
              <p>
                <?php echo $_SESSION['product'][6] ?>
              </p>
          <!--/blockquote-->
          <hr class="bg-lightblue">

          <div class="row cells4">
            <div class="cell offset1">
              <h3>$<?php echo $_SESSION['product'][2] ?></h3>
            </div>


						<div data-role="dialog" id="dialog">
						    <h1>Simple dialog</h1>
						    <p>
						        Dialog :: Metro UI CSS - The front-end framework
						        for developing projects on the web in Windows Metro Style.
						    </p>
						</div>
						<script>

						</script>

            <div class="cell">
							<!-- <form class="" action="cart.php" method="get" id="ismForm"> -->

									<input type="hidden" name="prod_id" value="<?php echo $_SESSION['product'][0] ?> ">
									<button id="cart_add" class="button primary text-shadow">Agregar al Carro</button>
							<!-- </form> -->
						</div>

          </div>

      </div><!-- end cell[1] colspan2-->

        <div class="cell">
            <img alt="" class="tr_all_hover" id="zoom_image" src="images/<?php echo $_SESSION['product'][5] ?>">
        </div>


          </div><!-- row -->
        </div><!-- grid -->
      </div><!-- container -->
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
