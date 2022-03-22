<!DOCTYPE html>

<head>
    <title>Exercicio 01</title>
    <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
    <header>
        <h1>Exercicio 01:</h1>
    </header>
    <main>        
        <form method="GET">
            <div>
                <label for="name">Nome:</label>
                <input type="text" name="nome" required/>
            </div>

            <div>
                <label>Informe seu sexo:</label>
            </div>

            <div>
                <input type="radio" name="sexo" value="masculino" required/>&#x1F468
                <input type="radio" name="sexo" value="feminino" required/>&#x1F469
            </div>
            <div>
                <label>Informe sua idade</label>
                <input type="number" name="idade" required/>
            </div>
            <div>
                <input type="submit"/>
            </div>
        </form>
        <div class="resultado">
            <?php 
            $nome = $_GET['nome'] = (isset($_GET['nome']) ) ? $_GET['nome'] : null;
            $sexo = $_GET['sexo'] = (isset($_GET['sexo']) ) ? $_GET['sexo'] : null;
            $idade = $_GET['idade'] = (isset($_GET['idade']) ) ? $_GET['idade'] : null;

            if ($idade != 0 or $nome != null or $idade != null) {
                if ($idade < 25 && $sexo == 'feminino') {
                    echo "&#x1F339 $nome, você está aceita! &#x1F339";
                } else {
                    echo "Não aceita";
                }
            } 
                
            ?>
        </div>
    </main>

</body>
</html>