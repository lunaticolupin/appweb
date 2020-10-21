<?php

function suma ($x, $y)
{
  	$s = $x + $y;
  	return $s;
}

function incrementa (&$a)
{
   $a = $a + 1;
}


echo $suma = suma("2a","3");
echo "\n";

$temp = 1;

incrementa($temp);

echo $temp;

echo "\n";

function muestranombre ($titulo = array())
{
    print "Estimado $titulo:\n";
}

muestranombre ();
muestranombre ("Prof.");

?>

