<?php

// definirajte niz s 10 brojeva (sami odredite koji su)

// ispišite ukupan zbroj svih brojeva

$niz=array(2,3,2,3,4,5,3,3,33,3,3,3,3,2,3,4);


$zbroj=0;
for($i=0; $i<count($niz);$i++){
	$zbroj+=$niz[$i];
}

echo $zbroj;
