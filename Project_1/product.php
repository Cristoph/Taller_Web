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
          <li><a href=""><?php echo $_SESSION['product']['name'] ?></a></li>
      </ul>
    </div>
  </div>

  <div class="container">
    <div class="grid">

      <div class="row cells3">
        <div class="cell colspan2">

          <h3><?php echo $_SESSION['product']['name'] ?></h3>
          <hr class="bg-lightblue">

          <div class="row cells2">
            <div class="cell">
              <div class="rating" data-role="rating" data-size="normal" data-value="<?php echo $_SESSION['product']['rating'] ?>"></div>
            </div>

            <div class="cell">
              <p>Stock disponible: <span><?php echo $_SESSION['product']['stock'] ?> unidades</span></p>
            </div>
          </div>

          <hr class="bg-lightblue">
          <!--blockquote-->
              <p>
                <?php echo $_SESSION['product']['detail'] ?>
              </p>
          <!--/blockquote-->
          <hr class="bg-lightblue">

          <div class="row cells4">
            <div class="cell offset1">
              <h3>$<?php echo $_SESSION['product']['price'] ?></h3>
            </div>

            <div class="cell">
							<form class="" action="cart.php" method="get" id="ismForm">
									<input type="hidden" name="prod_id" value="<?php echo $_SESSION['product']['id'] ?> ">
								<?php if(!in_array((int)$_SESSION['product']['id'], $_SESSION['cart'])){ ?>
									<button id="cart_add" class="button primary text-shadow">Agregar al Carro</button>
								<?php }else{ ?>
									<a href="cart.php" type="button" id="cart_add" class="button success disabled">Agregado</a>
								<?php } ?>
							</form>
						</div>

          </div>

      </div><!-- end cell[1] colspan2-->

        <div class="cell">
            <img alt="" class="tr_all_hover" id="zoom_image" src="images/<?php echo $_SESSION['product']['image'] ?>">
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
