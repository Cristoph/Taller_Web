<?php
    $game      = $_GET['game'];
    $game_name = "";
    $name      = $_GET['name']; //
    $email     = $_GET['email'];
    $sex       = $_GET['sex'];
    $country   = $_GET['country']; //
    $greeting  = "Hola"; //

switch ($country) {
    case "cl":
        $greeting = "Wena!! ... ";
        break;
    case "ar":
        $greeting = "Cheee!! ... ";
        break;
    case "br":
        $greeting = "Oi!! ... ";
        break;
    case "co":
        $greeting = "Parcero!! ... ";
        break;

}
//TODO: eliminar $img, renombrar imgenes como code y concatenar
switch ($game) {
    case "TWD1":
        $game_name = "The Walking Dead: Season 1";
        $img = "twd_s1_mini.jpg";
        break;
    case "TWD2":
        $game_name = "The Walking Dead: Season 2";
        $img = "twd_s2_mini.jpg";
        break;
    case "TWD400":
        $game_name = "The Walking Dead: 400 Days";
        $img = "twd_400_mini.jpg";
        break;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body class="<?php echo $game ?> img-back">

        <div id="Greeting" class="box center">
            <div class="fieldgroup">
                <h2><?php echo $greeting?> <strong><?php echo $name?></strong>... Gracias por Votar!!</h2>
            </div>
        </div>

        <div id="Voto" class="box center">
            <div>
                <img src="img/<?php echo $img ?>" />
            </div>
            <div class="group">
                <h3><?php echo $game_name ?></h3>
                <h2 class="text-center"> +1 Voto</h2>
            </div>
        </div>

        <div id="Data" class="box center">
            <h3 class="text-center">Tus Datos Personales</h3>
            <table>
              <tr>
                <td>Nombre:</td>
                <td><?php echo $name ?></td>
              </tr>
              <tr>
                <td>E-mail:</td>
                <td><?php echo $email ?></td>
              <tr>
                <td>Sexo:</td>
                <td><?php echo $sex=="H" ? 'Hombre' : 'Mujer' ?></td>
              </tr>
                <td>Pais:</td>
                <td><img src="img/none.png" class="flag flag-<?php echo $country ?>" alt="" /></td>
              </tr>
            </table>
        </div>


    </body>
</html>
