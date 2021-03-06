<?php
$id = $_GET['id'];
$name = $_GET['name'];
?>

<!DOCTYPE html>
<html>
  <head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Funeraria Andacollor | Urnas Detalle</title>
    <link rel="shortcut icon" href="images/logo.png">

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
    <h2>
      Urna - <?php echo $name ?>
    <hr class="bg-fun">

  </h2>

  </br>
    <div class="grid">

      <div class="row cells3">
        <div class="cell">
            <img src="images/urnas/urna_<?php echo $id ?>.jpg">
        </div>

        <div class="cell colspan2">

          <div class="grid">
            <div class="row cells2">
              <div class="cell">
                <ul class="simple-list large-bullet blue-bullet">
                                  <li>Lorem ipsum</li>
                                  <li>Lorem ipsum</li>
                                  <li>Lorem ipsum</li>
                                  <li>Lorem ipsum</li>
                              </ul>

              </div>
              <div class="cell">
                <ul class="simple-list large-bullet blue-bullet">
                                  <li>Lorem ipsum</li>
                                  <li>Lorem ipsum</li>
                                  <li>Lorem ipsum</li>
                                  <li>Lorem ipsum</li>
                              </ul>


              </div>
            </div>

          </div>
          <hr class="bg-fun">
          <div class="center">
          <button class="button large-button bg-fun color-white">Consulte Precios y Planes</button>
        </div>
        </div><!-- colspan2 -->


      </div><!-- row cell3 -->
  </div> <!-- grid -->
</div><!-- container -->
</br>
</div><!--page-content -->

  </body>
</html>
