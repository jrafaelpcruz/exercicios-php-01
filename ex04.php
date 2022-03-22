<!DOCTYPE html>

<head>
    <title>Exercicio 04</title>
    <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
    <header>
        <h1>Exercicio 04:</h1>
    </header>
    <main>        
        <form method="GET">
            <div>
                <label for="numeros">Informe três numeros (note que devem ser numeros diferentes):</label>
            </div>
            <div>
                <input type="number" name="numero1" required/>
            </div>
            <div>
                <input type="number" name="numero2" required/>
            </div>
            <div>
                <input type="number" name="numero3" required/>
            </div>
            <div>
                <input type="submit"/>
            </div>
        </form>
        <div class="resultado">
            <?php
                $numero1 = $_GET['numero1'] = (isset($_GET['numero1']) ) ? $_GET['numero1'] : null;
                $numero2 = $_GET['numero2'] = (isset($_GET['numero2']) ) ? $_GET['numero2'] : null;
                $numero3 = $_GET['numero3'] = (isset($_GET['numero3']) ) ? $_GET['numero3'] : null;

                if ($numero1 != $numero2 or $numero2 != $numero3 or $numero1 != $numero3) {
                    $numeros = array( $numero1, $numero2, $numero3);
                    rsort($numeros);
                    echo "Em ordem descrescente:<br>";
                    echo "$numeros[0]<br>";
                    echo "$numeros[1]<br>";
                    echo "$numeros[2]";
                }
            ?>
        </div>
    </main>
<body>