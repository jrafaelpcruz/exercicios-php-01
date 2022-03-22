<!DOCTYPE html>

<head>
    <title>Exercicio 06</title>
    <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
    <header>
        <h1>Exercicio 06:</h1>
    </header>
    <main>        
        <form method="GET">
            <div>
                <label for="number">Digite um numero maior que 1:</label>
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

                if ($numero > 1) {
                    while ($numero > 0) {
                        $produto = $numero * $numero;
                        echo "$numero e o produto é $produto<br>";
                        $numero--;
                    }
                }

            ?>
        </div>
    </main>
</body>
</html>