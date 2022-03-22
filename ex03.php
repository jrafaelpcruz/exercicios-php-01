<!DOCTYPE html>
<head>
    <?php
        $numero1 = 0; 
        $numero2 = 0;
    ?>
    <title>Exercicio 03</title>
    <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
    <header>
        <h1>Exercicio 03:</h1>
    </header>
    <main>
        <div>
        <form method="GET">
            <div>
                <label for ="number">Informe um número:</label>
                <input type="number" name="numero1"/>
            </div>
            <div>
                <label for ="number">Informe mais um número</label>
                <input type="number" name="numero2"/>
            </div>
            <div>
                <input type="submit"/>
            </div>
        </form>
        <div class="resultado">
            <?php
                $numero1 = $_GET['numero1'] = (isset($_GET['numero1']) ) ? $_GET['numero1'] : null;
                $numero2 = $_GET['numero2'] = (isset($_GET['numero2']) ) ? $_GET['numero2'] : null;
                $numerof = $numero1 + $numero2;

                if ($numero1 != 0 or $numero2 != 0) {
                    if ($numerof > 20) {
                        $numerof = $numerof + 8;
                        echo "<div>$numero1 + $numero2 + 8 = $numerof</div>";
                    } else {
                        $numerof = $numerof - 5;
                        echo "<div>$numero1 + $numero2 - 5 = $numerof</div>";
                    }
                }
            ?>
        </div>
    </main>
</body>
</html>