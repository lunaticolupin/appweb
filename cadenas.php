<?php
        $cadena = "aprendiendo a programar en PHP";
        // Devuelve: "aprendiendo a programar en php"
         echo strtolower( $cadena )."<br />";
        // Devuelve: "APRENDIENDO A PROGRAMAR EN PHP"
         echo strtoupper( $cadena )."<br />";
        // Devuelve: "Aprendiendo a programar en PHP"
         echo ucfirst( $cadena )."<br />";
        // Devuelve: "Aprendiendo A Programar En PHP"
         echo ucwords( $cadena );

         $cadena1 = "Aprendiendo a programar en PHP";
         $cadena2 = "Aprendiendo a programar en PHP\n";
         // Devuelve: "La longitud de la cadena es de [30] caracteres."
          echo "La longitud de la cadena es de [".strlen($cadena1)."] caracteres.<br />";
         // Devuelve: "La longitud de la cadena es de [31] caracteres."
          echo "La longitud de la cadena es de [".strlen($cadena2)."] caracteres.<br />";

        $var1 = "hola";
        $var2 = "hola";
        if (strcmp($var1, $var2) === 0){
            echo "Los strings coinciden";
        }
    ?>