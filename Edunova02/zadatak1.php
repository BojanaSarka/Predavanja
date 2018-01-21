<?php

//Primiti 4 parametra i ispisati ih jedan ispod drugog

$a=$_GET["a"];
$b=$_GET["b"];
$c=$_GET["c"];
$d=$_GET["d"];


echo $a;
echo $b;
echo $c;
echo $d;

echo "<hr />";
//rješenje 1
echo "$a<br />$b<br />$c<br />$d";

echo "<hr />";
//rješenje 2 - najbolje
echo $a . "<br />" . $b . "<br />" . $c . "<br />" . $d;
echo "<hr />";
//rješenje 3
?>
<?php echo $a; ?><br />
<?php echo $b; ?><br />
<?php echo $c; ?><br />
<?php echo $d; ?>
