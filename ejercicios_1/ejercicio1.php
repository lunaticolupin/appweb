<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 1</title>
</head>
<body>
    <form method="post">
        <input type = "number" name="salario" value="0" /><br>
        <input type ="submit" name="calcular" value="Calcular">
    </form>
    <?php
        if(isset($_POST["calcular"])){
            $salario = $_POST["salario"];
            $porcentaje = $salario * 0.025;

            $aportaciones = $porcentaje * 12;

            echo "<p><b>".$aportaciones."</b></p>";
        }
    ?>
</body>
</html>