<?php
        date_default_timezone_set('Europe/Madrid');
        echo "Ahora 'date_default_timezone_set()' es: ".date_default_timezone_get()."<br />";
        echo "Fecha (Zona horaria UTC+1): ".strftime("%A, %d de %B del %Y - %H:%M:%S")."<p />";
        date_default_timezone_set('America/Mexico_City');
        echo "Ahora 'date_default_timezone_set()' es: ".date_default_timezone_get()."<br />";
        echo "Fecha (Zona horaria UTC+0): ".strftime("%A, %d de %B del %Y - %H:%M:%S");
    ?>