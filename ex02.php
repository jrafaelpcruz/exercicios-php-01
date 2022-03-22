<!DOCTYPE html>
<head>
    <?php $numero = 0; ?>
    <title>Exercicio 02</title>
    <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
    <header>
        <h1>Exercicio 02:</h1>
    </header>
    <main>
        <div>
        <form method="GET">
            <div>
                <label for="number">Digite um numero:</label>
            </div>
            <div>
                <input type="number" name="numero"/>
            </div>
            <div>
                <input type="submit"/>
            </div>
        </form>
        </div>
        <div class="resultado">
            <?php
                $numero = $_GET['numero'] = (isset($_GET['numero']) ) ? $_GET['numero'] : null;

                if ($numero != 0) {
                    if ($numero % 10 == 0 or $numero % 5 == 0 or $numero % 2 == 0) {
                        if ($numero % 10 == 0) {
                            echo "<div>$numero é divisivel por 10</div>";
                        }
                        if ($numero % 5 == 0) {
                            echo "<div>$numero é divisivel por 5</div>";
                        }
                        if ($numero % 2 == 0) {
                            echo "<div>$numero é divisivel por 2</div>";
                        }
                    } else {
                        echo "<div>$numero não é divisivel por 10, 5 ou 2</div>";
                    }
                } 
            ?>
        </div>


    </main>

</body>
</html>