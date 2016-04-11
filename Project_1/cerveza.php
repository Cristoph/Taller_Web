<?php

//PSEUDO DB
//**********************
$id = $_GET['id'];


switch ($id) {
    case "0":
      //Cerveza[0]
      $Name    = "Tübinger - Hoppiness IPA";
      $Marca   = "Tübinger";
      $Stock   = "42";
      $Rating  = "3";
      $Precio  = "1.890";
      $Image   = "Bottleshot-IPA.png";
      $Descrip = "Color damasco oscuro, leve espuma. Hay aromas a maracuyá y mango, alternándose con la presencia de la malta. Una nariz no tan   definida. Al probarla asoman dulzor y amargor por partes iguales, pero de un perfil promedio, sin extremos. Es correcta, sin embargo se echa de menos mayor elegancia. Reconocimientos: Medalla de bronce, The Great South Beer Cup (SBC) 2015. Medalla de oro, Copa Cervezas de América 2015 (Chile) (CCA). Temperatura recomendada de consumo: 8ºC";
      break;
    case "1":
      //Cerveza[1]
      $Name    = "Leyenda - Golden Ale";
      $Marca   = "Leyenda";
      $Stock   = "24";
      $Rating  = "4";
      $Precio  = "1.990";
      $Image   = "Leyenda-Golden.jpg";
      $Descrip = "Cerveza rubia de fermentación Ale, caracterizada por un equilibrado sabor y suave amargor.";
      break;
    case "2":
      // Cerveza[2]
      $Name    = "Pinta Negra - Porter Criolla";
      $Marca   = "Cinco Siete Cinco";
      $Stock   = "33";
      $Rating  = "4";
      $Precio  = "1.890";
      $Image   = "Pinta-Negra.jpg";
      $Descrip = "Cerveza negra de toques tostados y sabor intenso. El estilo Porter inglés influencia a esta cerveza, enriquecida por las ricas cualidades que le entregan sus ingredientes, los que junto a un correcto proceso de elaboración, entregan una cerveza negra de excelente sabor. Maltas: Pilsen, Caramelo 45L, Black Patent y chocolate. Lúpulos: Summit y Willamette.";
      break;
    case "3":
      //Cerveza[3]
      $Name    = "DieM - Dunkel";
      $Marca   = "DieM";
      $Stock   = "22";
      $Rating  = "3";
      $Precio  = "1.390";
      $Image   = "Diem-dunkel.jpg";
      $Descrip = "Die M Dunkel es una cerveza de gran firmeza en su cuerpo, mantiene un vivo e intenso color oscuro, suaves y agradables aromas de café por el tostado de sus maltas, y leves notas de cacao al paladar, cualidades obtenidas al no pasar por un proceso de filtrado. Es de gasificación natural.";
      break;
    case "4":
      //Cerveza[4]
      $Name    = "Toro Macho - Porter";
      $Marca   = "Toro Macho";
      $Stock   = "21";
      $Rating  = "2";
      $Precio  = "1.990";
      $Image   = "toro-macho.jpg";
      $Descrip = "Una cerveza Porter, esta cerveza de 5 grados de alcohol con un gran cuerpo de tonos oscuros con aromas y sabores a café, avellanas tostadas, es dado por las maltas tostadas y las cebadas y la incorporación de los lúpulos que se entremezclan su amargor y dulzor propio de esta cerveza, con una espuma consistente.";
      break;
    case "5":
      //Cerveza[5]
      $Name    = "Leyenda - Santiago Ale 500cc";
      $Marca   = "Leyenda";
      $Stock   = "56";
      $Rating  = "2";
      $Precio  = "2.790";
      $Image   = "leyenda-santiago.jpg";
      $Descrip = "Es una agradable cerveza de color acaramelado, muy fácil de beber, con un bajo amargor y reducido tenor alcohólico. Su cuidadoso proceso de elaboración, desde el tratamiento del agua hasta la maduración bajo temperatura controlada, permiten lograr esta delicada cerveza, ¡disfrútala!";
      break;
}
?>

<!DOCTYPE html>
<html>
  <head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Titulo</title>

    <link href="css/metro.css" rel="stylesheet">
    <link href="css/metro-icons.css" rel="stylesheet">
    <link href="css/metro-responsive.css" rel="stylesheet">
    <link href="css/metro-schemes.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/metro.js"></script>
    <script src="js/docs.js"></script>
    <script src="js/prettify/run_prettify.js"></script>

  </head>
<body>


<div class="page-content">

  <div class="container">
    <div class="grid">
      <ul class="breadcrumbs mini">
                          <li><a href="#"><span class="icon mif-home"></span></a></li>
                          <li><a href="index.html">Cervezas</a></li>
                          <li><a href="#"></a><?php echo $Marca ?></li>
                          <li><a href="#"><?php echo $Name ?></a></li>
                      </ul>
                    </div>
  </div>

  <div class="container">
    <div class="grid">

      <div class="row cells3">
        <div class="cell colspan2">

          <h3><?php echo $Name ?></h3>
          <hr class="bg-green">

          <div class="row cells2">
            <div class="cell">
              <div class="rating" data-role="rating" data-size="normal" data-value="<?php echo $Rating ?>"></div>
            </div>

            <div class="cell">
              <p>Stock disponible: <span><?php echo $Stock ?> unidades</span></p>
              <p>Marca:
              <span>
                <a class="color_dark" href="htps://www.<?php echo $Marca ?>.cl" target="_blank"><?php echo $Marca ?></a>
              </span>
            </div>
          </div>

          <hr class="bg-green">
          <!--blockquote-->
              <p>
                <?php echo $Descrip ?>
              </p>
          <!--/blockquote-->
          <hr class="bg-green">

          <div class="row cells4">
            <div class="cell offset1">
              <h3>$<?php echo $Precio ?></h3>
            </div>

            <div class="cell">
              <button class="button success text-shadow">Comprar</button>

            </div>
          </div>

      </div><!-- end cell[1] colspan2-->

        <div class="cell">
            <img alt="" class="tr_all_hover" id="zoom_image" src="images/cervezas/<?php echo $Image ?>">
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
  </body>

  </html>


