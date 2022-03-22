<!DOCTYPE html>

<head>
    <title>Exercicio 07</title>
    <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
    <header>
        <h1>Exercicio 07:</h1>
    </header>
    <main>        
        <form method="GET">
            <div>
                <label for="number">Digite um numero maior que 0:</label>
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

                if ($numero > 0) {
                    while ($numero > 0) {
                        echo "Eu <span style='color:red;'>&#x2764</span> programar em PHP!!!<br>";
                        $numero--;
                    }
                }
            ?>
        </div>
    </main>
</body>
</html>