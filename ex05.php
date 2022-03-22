<!DOCTYPE html>

<head>
    <title>Exercicio 05</title>
    <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
    <header>
        <h1>Exercicio 05:</h1>
    </header>
    <main>        
        <form method="GET">
            <div>
                <label for="numeros">Informe três numeros maiores que 0:</label>
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

                if ($numero1 > 0 && $numero2 > 0 && $numero3 > 0) {
                    if ($numero1 == $numero2 && $numero2 == $numero3) {
                        echo "<img src='img/triequ.png' />";
                    } else
                    if ($numero1 == $numero2 or $numero1 == $numero3 or $numero2 == $numero3) {
                        echo "<img src='img/triiso.png' />";
                    } else
                    if ($numero1 != $numero2 && $numero1 != $numero3 && $numero3 != $numero2) {
                        echo "<img src='img/triesc.png' />";
                    }
                }
            ?>
        </div>
    </main>
</body>
</html>