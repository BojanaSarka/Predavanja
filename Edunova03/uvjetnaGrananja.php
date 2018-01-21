<?php

//kao da je ovo unio korisnik i mi ne znamo vrijednost
$v=6;

//if

if($v>3){ //uvijek ima true granu
	echo "OK";
}
//false grana je opcionalna

if($v>3){
	echo "OK";
}else{
	echo "NOT";
}

//LOŠE
if($v>3) 
	echo "OK"; //koristiti {}
	

// if radi s boolean tipom podatka


$x=12;
$y=7;

// logički operatori

//i
if($x>15 & $y<10){ //provjerava oba izraza
	echo "XX";
}

if($x>15 && $y<10){ //u slučaju da prvi uvjet ne prođe, ne provjerava se drugi
	echo "XX";
}


//ili
if($x>15 | $y<10){ //provjerava oba izraza
	echo "XX";
}


if($x>15 || $y<10){ //u slučaju da prvi uvjet prođe, ne provjerava se drugi
	echo "XX";
}


//ne
if(!($x>$v)){
	echo "XX";
}

//provjera jednakosti

$t="2";
if($t==2){ //prolazi
	echo "OK";
}

$t="2";
if($t===2){ // NE prolazi
	echo "OK";
}

$t="2";
if($t==="2"){ //prolazi
	echo "OK";
}

//inline if

if($x===12){
	echo "1";
}else{
	echo "2";
}

echo $x===12 ? "1" : "2";


//ugnježđeni if
if($x<2){
	if($y>2){
		echo "1";
	}
}

//else if

if($x===1){
	echo "nedovoljan";
}else if($x===2){
	echo "dovoljan";
}else if($x===3){
	echo "dobar";
}else if($x===4){
	echo "vrlo dobar";
}else if($x===5){
	echo "odličan";
}else{
	echo "Nije ocjena";
}



//switch
switch($x){
	case 1:
		echo "nedovoljan";
		break;
	case 2:
		echo "dovoljan";
		break;
	case 3:
		echo "dobar";
		break;
	case 4:
		echo "vrlo dobar";
		break;
	case 5:
		echo "odličan";
		break;
	default:
		echo "nije ocjena";
}















