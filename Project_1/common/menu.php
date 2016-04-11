<header class="app-bar  fixed-top darcula" data-role="appbar">

  <div class="container">
     <div class="" data-role="appbar app-bar darcula">
        <ul class="app-bar darcula h-menu ">
      	<li>
          <a href="home.php" class="app-bar-element branding">
            <img src="images/dev_null_gray.png" style="height: 48px; display: inline-block; margin-right: 10px;">
          </a>
          <span class="app-bar-divider"></span>
        </li>
        <li data-flexorderorigin="0" data-flexorder="1">
          <a href="" class="dropdown-toggle">Productos</a>
          <ul class="d-menu" data-role="dropdown">
            <li><a href="">Nacionales</a></li>
            <li><a href="#Extranjeras">Extranjeras</a></li>
          </ul>
        </li>
        <li data-flexorderorigin="1" data-flexorder="2">
          <a href="" class="dropdown-toggle">Ayuda</a>
          <ul class="d-menu" data-role="dropdown">
            <li><a href="#comprar">Como Comprar</a></li>
            <li><a href="#quienes">Quienes Somos</a></li>
          </ul>
        </li>

                <!--li class="place-right no-hovered">
                    <form>
                        <div class="input-control text" style="width: 250px; margin-right: 10px">
                            <input type="text" placeholder="Search...">
                            <button class="button"><span class="mif-search"></span></button>
                        </div>
                    </form>
                </li-->
      <ul class="app-bar-menu place-right" data-flexdirection="reverse">

          <li data-flexorderorigin="1" data-flexorder="1">
              <a href=""><span class="mif-cart icon"></span> (0)</a>
          </li>

          <li data-flexorderorigin="3" data-flexorder="3">
              

										<!-- ##################### login ################ -->
										<?php
										include("common/login.php");
										?>
										<!-- ##################### end login ################ -->

          </li>

        </ul>

         </ul><!-- app-bar -->

        </div><!-- appbar -->
    </div><!-- container -->
</header>
