<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piedra Papel o Tijera</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

</head>

<body>

    <H1><strong>Piedra, Papel o Tijera</strong> </H1>
    <form action="PiedraPapelTijera.php" method="post">
        <div class="field">
            <label for="opcion">Que va a tirar?</label> <br>
            <h2>Escoja un valor de 1 a 3</h2>
            <br>
            <h2>1 Es Piedra </h2>
            <h2>2 Es Papel</h2>
            <h2>3 Es Tijera</h2>
            <div class="control">
                <input list="jugadas" name="jugadas" id="fjugada" class="input">
                <datalist id="jugadas">
                    <option value="1"> Piedra</option>
                    <option value="2">Papel</option>
                    <option value="3"> Tijera</option>
                </datalist> <br> <br>
            </div>
        </div>

        <input class="button" type="submit" value="Tirar">


    </form>




</body>

</html>