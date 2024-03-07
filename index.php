<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /* Laço
    for($i=0; $i<=10; $i++){
            echo $i;
        }
    */
    /*
    echo $_GET ['nome'] .  "<br>";
        echo $_GET['cor'] . "<br>";
        echo $_GET['musica'];
    */
    /*
    if($_GET ['pagina'] == "home"){
        echo "Página Home";
    }
    else if ($_GET ['pagina'] == "cadastrar") {
        echo "Página Cadastrar";
    }
    else {
        echo "Página X";
    }
    */
    if(isset($_GET['operacao']) && isset ($_GET['x']) && isset ($_GET['y'])) {
    if($_GET ['operacao'] == "adicao"){
        echo $_GET['x'] + $_GET['y'];
    }
    else if($_GET ['operacao'] == "subtracao"){
        echo $_GET['x'] - $_GET['y'];
    }
    else if($_GET ['operacao'] == "multiplicacao"){
        echo $_GET['x'] * $_GET['y'];
    }
    else if($_GET ['operacao'] == "divisao"){
        echo $_GET['x'] / $_GET['y'];
    }
    else {
        echo "erro";
    }
    }
    ?>
</body>
</html>