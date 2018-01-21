<?php

//zadatak: 10 puta ispisati jedno ispod drugog Osijek

//bez poznavanja petlji
echo "Osijek<br />";
echo "Osijek<br />";
echo "Osijek<br />";
echo "Osijek<br />";
echo "Osijek<br />";
echo "Osijek<br />";
echo "Osijek<br />";
echo "Osijek<br />";
echo "Osijek<br />";
echo "Osijek<br />";

//for petlja

// opća sintaksa
// for (odkuda; dokuda; uvećanje)
echo "<hr />";
for($i=0;$i<10;$i=$i+1){
	echo "Osijek<br />";
}


//skraćeno - nećemo korisiti
//for($i=0;$i<10;$i=$i+1)echo "Osijek<br />";

echo "<hr />";

for($i=0;$i<10;$i++){
	echo "Osijek " . ($i+1) . "<br />";
}


//$i=$i+1 je istovjetno $i++;   $i+=1

echo "<hr />";

for($i=10;$i>0;$i--){
	echo "Osijek " . $i . "<br />";
}



for($i=0;$i<10;$i++): ?>
<p>Nešto</p>


<?php
endfor;

if(isset($_GET["i"])){
	$x=$_GET["i"];
}else{
	$x=10;
}

if(isset($_GET["j"])){
	$y=$_GET["j"];
}else{
	$y=10;
}



echo "<table>";
for($i=1;$i<=$x;$i++){
	echo "<tr>";
	for($j=1;$j<=$y;$j++){
		echo "<td>" . ($i*$j) . "</td>";	
	}
	echo "</tr>";
}
echo "</table>";

//petlja se može prekinuti i nastaviti

if(isset($_GET["i"])){
	$x=$_GET["i"];
}else{
	$x=10;
}

for($i=0;$i<$x;$i++){
	if($i>50){
		break;
	}
	if($i==30){
		continue;
	}
	
	
	echo "Osijek " . $i . "<br />";
}

for($i=0;$i<$x;$i++){
	if($i<50){
		if($i!=30){
			echo "Osijek " . $i . "<br />";
		}
		
	}
}

//beskonačne petlje
//for($i=0;$i<0;$i++){
	
//}

//for(;;){
	
//}




















