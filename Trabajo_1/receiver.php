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

switch ($game) {
    case "TWD1":
        $game_name = "The Walking Dead: Season 1";
        break;
    case "TWD2":
        $game_name = "The Walking Dead: Season 2";
        break;
    case "TWD400":
        $greeting = "";
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
    
        <div class=" box">
            <div class="fieldgroup">
                <h2><?php echo $greeting .$name ?> ... Gracias por Votar!!</h2>
            </div>
        </div>

        <div class=" box">
            <div class="fieldgroup">
                <h3>+1 Voto a: <?php echo $game_name ?></h3>
            </div>
        </div>
        
        
        <div class="box">
            <h3>Tus Datos Personales:</h3>
            <p>Nombre: <?php echo $name ?> </p>
            <p>E-mail: <?php echo $email ?> </p>
            <p>Sexo: <?php echo $sex=="H" ? 'Hombre' : 'Mujer' ?> </p>
            <p>Pais: <img src="img/none.png" class="flag flag-<?php echo $country ?>" alt="" /></p>
        </div>
        
        
    </body>
</html>
