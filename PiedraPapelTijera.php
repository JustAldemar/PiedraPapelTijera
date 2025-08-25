<!DOCTYPE html>
<html lang="en">

<head>

    <title>Resultado</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>

<body>


    <h1>Pagina de resultados</h1>
    <br>
    <?php
    $jugada = $_POST["jugadas"];
    $maquina = 1 + rand() % 3;

    if ($maquina == "1") {
        echo "La jugada de la maquina es Piedra <br> ";

    }
    if ($maquina == "2") {
        echo "La jugada de la maquina es Papel <br>";

    }
    if ($maquina == "3") {
        echo "La jugada de la maquina es Tijera <br> ";
    }
    if ($jugada == $maquina) {
        echo "Es un empate!";
    }
    if ($jugada == "1" && $maquina == "3") {
        echo "Has ganado <br>";


    } else if ($jugada == "1" && $maquina == "2") {
        echo "Has perdido";
    }
    if ($jugada == "2" && $maquina == "1") {
        echo "Has ganado";

    } else if ($jugada == "2" && $maquina == "3") {
        echo "Has perdido";

    }
    if ($jugada == "3" && $maquina == "2") {
        echo "Has ganado";

    } else if ($jugada == "3" && $maquina == "1") {
        echo "Has perdido contra la piedra :( ";
    }
    if ($jugada == null) {
        echo "Porfavor, ingrese un valor valido!, no deje a la maquina jugando sola :(  ";
    }
    ?>
</body>

</html