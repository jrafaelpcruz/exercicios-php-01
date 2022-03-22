<!DOCTYPE html>

<head>
    <title>Exercicio 08</title>
    <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
    <header>
        <h1>Exercicio 08:</h1>
    </header>
    <main>        
        <form method="GET">
            <div>
                <label for="number">Digite um numero:</label>
            </div>
            <div>
                <input type="number" name="numero" required/>
            </div>
            <div>
                <input type="submit"/>
            </div>
        </form>
        <div class="resultado">
            <?php
                $numero = $_GET['numero'] = (isset($_GET['numero']) ) ? $_GET['numero'] : null;
                if ($numero >= 100 && $numero <= 200) {
                    $contador++;
                }
                echo $contador;
            ?>
        </div>
    </main>
</body>
</html>