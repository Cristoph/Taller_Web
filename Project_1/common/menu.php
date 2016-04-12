<header class="app-bar fixed-top darcula" data-role="appbar">
    <div class="container">
			<a href="home.php" class="app-bar-element branding">
				<img src="images/dev_null_gray.png" style="height: 48px; display: inline-block; margin-right: 10px;">
			</a>
			<div class="app-bar-divider"></div>
        <ul class="app-bar-menu small-dropdown">

					<li data-flexorderorigin="0" data-flexorder="1">
	          <a href="" class="dropdown-toggle">Productos</a>
	          <ul class="d-menu" data-role="dropdown">
							<li><a href="products.php">Null Pack</a></li>
	          </ul>
	        </li>

					<li data-flexorderorigin="1" data-flexorder="2">
	          <a href="" class="dropdown-toggle">Mas</a>
	          <ul class="d-menu" data-role="dropdown">
							<li><a href="#quienes">Quienes Somos</a></li>
	            <li><a href="contacto.php">Contacto</a></li>
	          </ul>
	        </li>

        </ul>
				<ul class="app-bar-menu place-right" data-flexdirection="reverse">
					<div class="app-bar-divider"></div>
	        <li data-flexorderorigin="1" data-flexorder="1">
	        	<a id="cart" href="cart.php"><span id="cart" class="mif-cart icon">
									<?php if(isset($_SESSION['cart'])){ echo count($_SESSION['cart']); }else{ echo 0; }; ?></span>
						</a>
	        </li>
					<div class="app-bar-divider"></div>
	        <li data-flexorderorigin="3" data-flexorder="3">
						<!-- ##################### login ################ -->
						<?php
						include("common/login.php");
						?>
						<!-- ##################### end login ################ -->
	        </li>
	      </ul>
        <span class="app-bar-pull"></span>
    <div class="app-bar-pullbutton automatic" style="display: none;"></div><div class="clearfix" style="width: 0;"></div><nav class="app-bar-pullmenu hidden flexstyle-app-bar-menu" style="display: none;"><ul class="app-bar-pullmenubar hidden app-bar-menu"></ul></nav></div>
</header>
