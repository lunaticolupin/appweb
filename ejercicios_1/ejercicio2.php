<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 2</title>
</head>
<body>
    <form method="post">
        Número de sonidos: <input type = "number" name="num_sonido" value="0" /><br>
        <input type ="submit" name="calcular" value="Calcular">
    </form>
    <?php
        if(isset($_POST["calcular"])){
            $numero = $_POST["num_sonido"];
            $numero = floatval($numero); //intval() 

            if($numero <= 0){
                die("Error: el numero debe ser mayor a 0");
            }

            $temperatura = $numero / 4 + 40;
        }
    ?>
    <h4>Temperatura: <?php echo $temperatura ?></h4>
</body>
</html>