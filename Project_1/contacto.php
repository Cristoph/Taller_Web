<?php
	include("common/head.php");
	include("common/menu.php");

// no puede estar en el view
if(isset($_GET['user'])){
  $user=$_GET['user'];
  $mail=$_GET['mail'];
  $subject=$_GET['subject'];
  $msg=$_GET['msg'];
  	mysql_query("INSERT INTO `Contact` VALUES ('$user','$mail','$subject','$msg');",$link);

if(mysql_errno($link)==0){
	//ok mostra modal con OK
}else if(mysql_errno($link)=="1062"){
	//error: mysql_error($link);
}

}

?>
<!-- ############################################# -->

<div class="page-content">
  <div class="container">
    <div class="grid">
      <ul class="breadcrumbs2 mini">
          <li><a href="home.php"><span class="icon mif-home"></span></a></li>
          <li><a href="contacto.php">Contacto</a></li>
      </ul>
    </div>
  </div>
  <div class="container">
    <div class="grid">

      <div class="row">
        <div class="cell">
          <h3>
          Contactanos
          </h3>
        </div>
      </div>

      <div class="row">
        <div class="cell">
          <h4>
            Dejanos tus consultas, nuestros asesores te contactara.
          </h4>
          <hr class="bg-lightblue">
        </div>
      </div>

    </div>
  </div>
  <div class="container">

    <div class="grid">

      <div class="row cells2">
        <div class="cell">
          <h4>Fono-Null las 24 horas:</h4>
          <span class="mif-phone mif-2x"> 9-6665555 </span>
          <hr class="bg-fun">

          <form action="" method="get">

            <div class="input-control modern text iconic">
              <input type="text" name="user">
              <span class="label"></span>
              <span class="informer">Por favor ingrese Su Nombre</span>
              <span class="placeholder">Su Nombre</span>
              <span class="icon mif-user"></span>
            </div>
            <div class="input-control modern text iconic">
              <input type="text" name="mail">
              <span class="label"></span>
              <span class="informer">Por favor ingrese Su E-Mail</span>
              <span class="placeholder">Su E-Mail</span>
              <span class="icon mif-mail"></span>
            </div>
            <div class="input-control modern text iconic">
              <input type="text" name="subject">
              <span class="label"></span>
              <span class="informer">Por favor ingrese el Asunto</span>
              <span class="placeholder">Asunto</span>
              <span class="icon mif-mail"></span>
            </div>
          </br>
              <h4 class="text-grey"><span class="icon mif-pencil mif-2x"></span>  Su mensaje</h4>
              <div class="input-control textarea" data-role="input" data-text-max-height="200" style="width:300px;">
                  <textarea name="msg"></textarea>
              </div>
              <div class="input-control text iconic">
              <button class="button large-button primary">Enviar</button>
            </div>
          </form>
        </div>

        <div class="cell">

          <h4>Nuestra Ubicacion</h4>
          <div class="textwidget">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d832.5868852774785!2d-70.64336609250509!3d-33.414182470459366!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c5e848d2bb67%3A0x4d02a98a5200e83d!2sRecoleta+1455!5e0!3m2!1ses!2scl!4v1400802338600" width="390" height="500" frameborder="0">
            </iframe>
          </div>

        </div>


      </div><!-- grid -->
    </div><!-- container -->
  </br>
  </div><!--page-content -->
  <!-- ############################################# -->
  <?php
    include("common/footer.php")
  ?>
