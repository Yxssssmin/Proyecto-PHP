<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Agencia de viajes</title>
</head>

<body>

<section class="si">
    
    <h1>BILLETE DE VIAJE</h1>
    
    
    <?php

    print "<h5> DATOS PERSONALES </h5>\n";
    print "\n";
    print "<h3><p>Nombre: $_REQUEST[nombre]</p></h3>\n";
    print "<h3><p>E-mail: $_REQUEST[email]</p></h3>\n";
    print "<h3><p>Número de contacto: $_REQUEST[telefono]</p></h3>\n";
    print "<h3><p>Nacionalidad: $_REQUEST[Nacionalidad]</p></h3>\n";

    print "<h5> FECHA DEL VIAJE</h5>\n";

    print "<h3><p>Fecha y hora ida: $_REQUEST[bdaytime]</p></h3>\n";
    print "<h3><p>Fecha y hora vuelta: $_REQUEST[bdaytime1]</p></h3>\n";

    print "<h5> RESERVA </h5>\n";

    $numero=$_GET['nadultos'];
    print " <h3><p> HAY $numero ADULTOS</p></h3>\n";

    $edad = $_GET['edad'];

    switch ($edad) {
        case '18-30':
            echo "<h3><p> ADULTO de 18 y 30 años</p></h3>";
            break;
        
        case '31-50':
            echo " <h3><p> ADULTO de entre 31 y 50 años</p></h3>\n";
            break;
        case '51-64':
            echo " <h3><p> ADULTO de entre 51 y 64 años</p></h3>\n";
            break;
        case '65+':
            echo "<h3> <p> ADULTO de más de 65 años</p></h3>\n";
            break;
    }


    $paises =$_GET['paises'];
    

        switch ($paises) {
            case "EEUU":
              echo " <h3><p> ❃ Has escogido Estados Unidos ❃ <img src='./imagenes/paises/EEUU.jpg' width=\"600px\" alt=10px> </p>";
              echo " <h3><p> ➪ Capital: Washington D.C. </p></h3>\n";
              echo " <h3><p> ➪ Lugares de interés: Nueva York, Miami, Los Angeles </p></h3>\n";

              break;
            
            case "Marruecos":
                echo " <h3><p> ❃ Has escogido Marruecos ❃ <img src='./imagenes/paises/Marruecos.jpg' width=\"600px\"  alt=10px> </p>\n";
                echo " <h3><p> ➪ Capital: Rabat </p></h3>\n";
                echo " <h3><p> ➪ Lugares de interés: Mezquita Hassan II, Jardín Majorelle. </p></h3>\n";
                break;
            
            case "Francia":
                echo " <h3><p>  ❃ Has escogido Francia ❃ <img src='./imagenes/paises/Francia.jpg' width=\"600px\" alt=10px> </p>\n";
                echo " <h3><p> ➪ Capital: París </p></h3>\n";
                echo " <h3><p> ➪ Lugares de interés: Torre Eiffel, Museo del Louvre, Notre Dame. </p></h3>";

                break;
            
            case "España":
                echo " <h3><p> ❃ Has escogido España ❃ <img src='./imagenes/paises/España.jpg' width=\"600px\" alt=10px> </p>";
                echo " <h3><p> ➪ Capital: Madrid </p></h3>\n";
                echo " <h3><p> ➪ Lugares de interés: Basílica Sagrada Familia, Park Güell, Alhambra, Museo del Prado. </p></h3>\n";
                break;

            case "Turquia":
                echo " <h3><p> ❃ Has escogido Turquia ❃ <img src='./imagenes/paises/turquia.jpg' width=\"600px\" alt=10px> </p>";
                echo " <h3><p> ➪ Capital: Ankara </p></h3>\n";
                echo " <h3><p> ➪ Lugares de interés: Santa Sofía, Mezquita azul, Palacio de Topkapi, Gran Bazar. </p></h3>\n";
                break;
            
        }

        $estrellas = $_GET['puntuacion'];

        switch ($estrellas) {
            case '3estrellas':
                echo " <h3><p> ACOMODACION DE: <img src = './imagenes/puntuaciones/3estrellas.png' width=\"600px\" alt=10px </p>\n";
                break;
            
            case '4estrellas':
                echo " <h3><p> ACOMODACION DE: <img src = './imagenes/puntuaciones/4estrellas.png' width=\"600px\" alt=10px </p>\n";
                break;
            case '5estrellas':
                echo " <h3><p> ACOMODACION DE: <img src = './imagenes/puntuaciones/5stars.png' width=\"600px\" alt=10px </p>\n";
                break;
        }

        $cadena = $_GET['cadena'];
        echo "Hay ".str_word_count($cadena, 0). " palabra/s en la cadena '$cadena'";
 
        //guardo las palabras en un array
        $array_cadena = str_word_count($cadena, 1);
        //saco cada elemento del array 
        foreach ($array_cadena as $palabra) {
        echo " ";
        }
    
        if (isset($_REQUEST["acepto"])) {
            print "<p> Estás de acuerdo con los Terminos y Condiciones </p>\n";
        } else {
            print "<p> No estás de acuerdo con los Terminos y Condiciones</p>\n";
        }
          
    ?>
    
    <br>
<a href="./index.html">Volver al formulario</a>
    
</section>

<br>
<footer>
    <pre> Yasmin Tate </pre>
    <pre> Entornos de Desarrollamiento </pre>
</footer>

</body>