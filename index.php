<!DOCTYPE html>
<html>
<head>
	<title>Poker Odds Calculator</title>
	 <link rel="stylesheet" type="text/css" href="theme.css">


</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>

<form action="index.php">

	<div class="php">

	<?php

	


////////////////////////////////
////    INICIALIZAR       /////
//////////////////////////////	

$sig1="";
$sig2="";
$sig3="";
$sig4="";
$sig5="";
$sig6="";
$sig7="";

$num1="";
$num2="";
$num3="";
$num4="";
$num5="";
$num6="";
$num7="";

$c1n="";
$c2n="";
$c3n="";
$c4n="";
$c5n="";
$c6n="";
$c7n="";

$c1o="";
$c2o="";
$c3o="";
$c4o="";
$c5o="";
$c6o="";
$c7o="";

$col1="";
$col2="";
$col3="";
$col4="";
$col5="";
$col6="";
$col7="";


$paresMesa ="";
$piesMesa ="";
$pares="";
$pies="";
$pokeresMesa=0;;
$pokeresMesaA="";
$fhMesa="";
$colorMesa="";
$colorMesaA="";
$pokeres ="";
$fh ="";
$color ="";
$escaleracolor = "";
$numeroCont = "";
$paloCont = "";
$ColorMesa="";;

$paresMesa = 0;
$piesMesa = 0;
$escMesaA = 0;
$escMesa = 0;
$escaleracolorMesaA = "";
$escaleracolorMesa = "";


$ctreboles = "";
$cdiamantes = "";
$cpicas = "";
$ccorazones = "";
$cdiamantes = "";

$MESActreboles = "";
$MESAcdiamantes = "";
$MESAcpicas = "";
$MESAccorazones = "";
$MESAcdiamantes = "";

$escalera = "";
$esc = "";
$manoCont = "";
$escalerarara = "";
$res = "";


$paresMesaMesaA=0;
$piesMesaMesaA=0;
$hand = "";
$handMesa ="";

$oddsPar=0;
$oddsPierna=0;
$oddsFull=0;
$oddsPoker=0;
$oddsColor=0;
$oddsDoblePar=0;
$oddsEscalera=0;
$oddsEscaleraColor=0;

$RIVoddsPar=0;
$RIVoddsPierna=0;
$RIVoddsFull=0;
$RIVoddsPoker=0;
$RIVoddsColor=0;
$RIVoddsDoblePar=0;
$RIVoddsEscalera=0;
$RIVoddsEscaleraColor=0;

$random = "a";



$carta1 = "";
$carta2 = "";
$carta3 = "";
$carta4 = "";
$carta5 = "";
$carta6 = "";
$carta7 = "";
$cartasiguales=0;
$cartasNOvacias=0;
$cartasVacias=0;
$indiceListaDeIguales=array();
$listaDeIguales=array();
$cartasArray=array();

$edit="";
$jugadores=2;
$igualesRANDOM=0;






   /////////////////////////////////////
  //////     REQUEST NUMEROS     //////
 /////////////////////////////////////

if (isset($_REQUEST['random'])){
                $random=$_REQUEST['random'];}

if (isset($_REQUEST['jugadores'])){
                $jugadores=$_REQUEST['jugadores'];}

if (isset($_REQUEST['res'])){
                $res=$_REQUEST['res'];}

if (isset($_REQUEST['edit'])){
                $edit=$_REQUEST['edit'];}                

if (isset($_REQUEST['num1'])){
                $num1=$_REQUEST['num1'];}

if (isset($_REQUEST['num2'])){
                $num2=$_REQUEST['num2'];}    

if (isset($_REQUEST['num3'])){
                $num3=$_REQUEST['num3'];}

if (isset($_REQUEST['num4'])){
                $num4=$_REQUEST['num4'];}    

if (isset($_REQUEST['num5'])){
                $num5=$_REQUEST['num5'];}

if (isset($_REQUEST['num6'])){
                $num6=$_REQUEST['num6'];}    

if (isset($_REQUEST['num7'])){
                $num7=$_REQUEST['num7'];}

   ///////////////////////////////////
  //////     REQUEST SIGNO     //////
 ///////////////////////////////////

if (isset($_REQUEST['sig1'])){
                $sig1=$_REQUEST['sig1'];}

if (isset($_REQUEST['sig2'])){
                $sig2=$_REQUEST['sig2'];}    

if (isset($_REQUEST['sig3'])){
                $sig3=$_REQUEST['sig3'];}

if (isset($_REQUEST['sig4'])){
                $sig4=$_REQUEST['sig4'];}    

if (isset($_REQUEST['sig5'])){
                $sig5=$_REQUEST['sig5'];}

if (isset($_REQUEST['sig6'])){
                $sig6=$_REQUEST['sig6'];}    

if (isset($_REQUEST['sig7'])){
                $sig7=$_REQUEST['sig7'];}

   ////////////////////////////////
  //////     RESETEAR  ///////////
 ////////////////////////////////

if ($res == "res"){
	$sig1="";
	$sig2="";
	$sig3="";
	$sig4="";
	$sig5="";
	$sig6="";
	$sig7="";

	$num1="";
	$num2="";
	$num3="";
	$num4="";
	$num5="";
	$num6="";
	$num7="";
}

///// CARTA RANDOM
if ($random=="random"){
do{

	$igualesRANDOM=0;

	$carta1 = $num1 . $sig1;
	$carta2 = $num2 . $sig2;
	$carta3 = $num3 . $sig3;
	$carta4 = $num4 . $sig4;
	$carta5 = $num5 . $sig5;
	$carta6 = $num6 . $sig6;
	$carta7 = $num7 . $sig7;

	$cartasquehay = array();
	$cartasquehay[] = $carta1;
	$cartasquehay[] = $carta2;
	$cartasquehay[] = $carta3;
	$cartasquehay[] = $carta4;
	$cartasquehay[] = $carta5;
	$cartasquehay[] = $carta6;
	$cartasquehay[] = $carta7;

	$numsMAZO = array();
	$numsMAZO[]="A";
	$numsMAZO[]="2";
	$numsMAZO[]="3";
	$numsMAZO[]="4";
	$numsMAZO[]="5";
	$numsMAZO[]="6";
	$numsMAZO[]="7";
	$numsMAZO[]="8";
	$numsMAZO[]="9";
	$numsMAZO[]="10";
	$numsMAZO[]="J";
	$numsMAZO[]="Q";
	$numsMAZO[]="K";

	$sigsMAZO = array();
	$sigsMAZO[]="♥";
	$sigsMAZO[]="♦";
	$sigsMAZO[]="♠";
	$sigsMAZO[]="♣";


	$num1R = $numsMAZO[rand(0,12)];
	$num2R = $numsMAZO[rand(0,12)];
	$num3R = $numsMAZO[rand(0,12)];
	$num4R = $numsMAZO[rand(0,12)];
	$num5R = $numsMAZO[rand(0,12)];
	$num6R = $numsMAZO[rand(0,12)];
	$num7R = $numsMAZO[rand(0,12)];

	$sig1R = $sigsMAZO[rand(0,3)];
	$sig2R = $sigsMAZO[rand(0,3)];
	$sig3R = $sigsMAZO[rand(0,3)];
	$sig4R = $sigsMAZO[rand(0,3)];
	$sig5R = $sigsMAZO[rand(0,3)];
	$sig6R = $sigsMAZO[rand(0,3)];
	$sig7R = $sigsMAZO[rand(0,3)];

	$carta1R = $num1R . $sig1R;
	$carta2R = $num2R . $sig2R;
	$carta3R = $num3R . $sig3R;
	$carta4R = $num4R . $sig4R;
	$carta5R = $num5R . $sig5R;
	$carta6R = $num6R . $sig6R;
	$carta7R = $num7R . $sig7R;

	$cartasquehayR = array();
	$cartasquehayR[]=$carta1R;
	$cartasquehayR[]=$carta2R;
	$cartasquehayR[]=$carta3R;
	$cartasquehayR[]=$carta4R;
	$cartasquehayR[]=$carta5R;
	$cartasquehayR[]=$carta6R;
	$cartasquehayR[]=$carta7R;


	foreach ($cartasquehay as $valueCarta) {
		foreach ($cartasquehayR as $valueRandom) {
			if ($valueCarta == $valueRandom){
				$igualesRANDOM++;
			}
		}
	}

	foreach ($cartasquehayR as $keyA => $valueA) {
		foreach ($cartasquehayR as $keyB => $valueB) {
			if ($keyA!=$keyB){
				if ($valueA == $valueB){
					$igualesRANDOM++;
				}
			}
		}
	}


} while ($igualesRANDOM!=0);


	if ($num1 == "" and $num2 == ""){
		$num1 = $num1R;
		$num2 = $num2R;
		$sig1 = $sig1R;
		$sig2 = $sig2R;
	}
	elseif ($num3 =="" and $num4 =="" and $num5 =="" ){
		$num3 = $num3R;
		$num4 = $num4R;
		$num5 = $num5R;
		$sig3 = $sig3R;
		$sig4 = $sig4R;
		$sig5 = $sig5R;
	}

	elseif($num6==""){
		$num6 = $num6R;
		$sig6 = $sig6R;
	}

	elseif($num7==""){
	$num7 = $num6R;
	$sig7 = $sig6R;
}

}




   ////////////////////////////////////////////
  //////     COLOR DE LAS CARTAS   ///////////
 ////////////////////////////////////////////



if ($sig1=="♥" or $sig1=="♦") {$col1 = ' style ="color:#a80000;"';}
if ($sig1=="♣" or $sig1=="♠") {$col1 = ' style ="color:black;"';}
  
if ($sig2=="♥" or $sig2=="♦") {$col2 = ' style ="color:#a80000;"';}
if ($sig2=="♣" or $sig2=="♠") {$col2 = ' style ="color:black;"';}
  
if ($sig3=="♥" or $sig3=="♦") {$col3 = ' style ="color:#a80000;"';}
if ($sig3=="♣" or $sig3=="♠") {$col3 = ' style ="color:black;"';}
  
if ($sig4=="♥" or $sig4=="♦") {$col4 = ' style ="color:#a80000;"';}
if ($sig4=="♣" or $sig4=="♠") {$col4 = ' style ="color:black;"';}
  
if ($sig5=="♥" or $sig5=="♦") {$col5 = ' style ="color:#a80000;"';}
if ($sig5=="♣" or $sig5=="♠") {$col5 = ' style ="color:black;"';}
  
if ($sig6=="♥" or $sig6=="♦") {$col6 = ' style ="color:#a80000;"';}
if ($sig6=="♣" or $sig6=="♠") {$col6 = ' style ="color:black;"';}
  
if ($sig7=="♥" or $sig7=="♦") {$col7 = ' style ="color:#a80000;"';}
if ($sig7=="♣" or $sig7=="♠") {$col7 = ' style ="color:black;"';}


// BORRAR CARTAS REPETIDAS

for ($x=0; $x <=6; $x++){


	$countILI = count($indiceListaDeIguales);
	$countLI = count($listaDeIguales);
	$countCA = count($cartasArray);

	if ($countILI>0){
		foreach ($indiceListaDeIguales as $i) {
			if (isset($indiceListaDeIguales[$i])){
		    unset($indiceListaDeIguales[$i]);}
		}
	}

	if ($countLI>0){
	foreach ($listaDeIguales as $ii) {
	    unset($listaDeIguales[$ii]);
	}
}
	if ($countCA>0){
	foreach ($cartasArray as $iii => $value) {
	    unset($cartasArray[$iii]);
	}
}



	$cartasiguales=0;


	$carta1 = $num1 . $sig1;
	$carta2 = $num2 . $sig2;
	$carta3 = $num3 . $sig3;
	$carta4 = $num4 . $sig4;
	$carta5 = $num5 . $sig5;
	$carta6 = $num6 . $sig6;
	$carta7 = $num7 . $sig7;

	$cartasArray = array();
	$cartasArray[] = $carta1;
	$cartasArray[] = $carta2;
	$cartasArray[] = $carta3;
	$cartasArray[] = $carta4;
	$cartasArray[] = $carta5;
	$cartasArray[] = $carta6;
	$cartasArray[] = $carta7;


	$listaDeIguales = array();

	for ($a = 0; $a <= 6; $a++){
		for ($b = 0; $b <= 6; $b++){
			if ($cartasArray[$a] == $cartasArray[$b]){
				if ($cartasArray[$a]!="" and $a!=$b){
					$listaDeIguales[]=$cartasArray[$a];
					$cartasiguales++;
					
				}
				
			}	
		}
	}

	$indiceListaDeIguales = array();


	foreach ($listaDeIguales as $value){
		$indiceListaDeIguales[] = array_search($value, $cartasArray);
		$print = array_search($value, $cartasArray);

	}

	$indiceLEN = count($indiceListaDeIguales);
	
	for ($i=0; $i <= $indiceLEN ; $i++) { 
	 

		if (isset($listaDeIguales[$i])){
		switch ($indiceListaDeIguales[$i]) {
			case 0:
				if ($listaDeIguales[$i]!=""){
				$num1 ="";
				$sig1 ="";
				$col1 = ' style ="border-color: red;"';
				}

				break;
			case 1:
				$num2 ="";
				$sig2 ="";
				$col2 = ' style ="border-color: red;"';
				break;
			case 2:
				$num3 ="";
				$sig3 ="";
				$col3 = ' style ="border-color: red;"';
				break;
			case 3:
				$num4 ="";
				$sig4 ="";
				$col4 = ' style ="border-color: red;"';
				break;
			case 4:
				$num5 ="";
				$sig5 ="";
				$col5 = ' style ="border-color: red;"';
				break;
			case 5:
				$num6 ="";
				$sig6 ="";
				$col6 = ' style ="border-color: red;"';
				break;
			case 6:
				$num7 ="";
				$sig7 ="";
				$col7 = ' style ="border-color: red;"';
				break;
			
	
		}
	
}




}
}


   /////////////////////////////////////////////////////////////////
  //////    CAMBIA LOS INPUTS DE LIST A TEXT READONLY   ///////////
 /////////////////////////////////////////////////////////////////

$inputNum1 = '<div class="carta"><div id="num"><input list="numero"  name="num1" ' . $col1 . ' placeholder=" "></div>';
$inputSig1 = '<div id="sig"><input list="simbolo" name="sig1" ' . $col1 . ' placeholder=" "></div></div>';

$inputNum2 = '<div class="carta"><div id="num"><input list="numero"  name="num2" ' . $col2 . ' placeholder=" "></div>';
$inputSig2 = '<div id="sig"><input list="simbolo" name="sig2" ' . $col2 . ' placeholder=" "></div></div>';

$inputNum3 = '<div class="carta"><div id="num"><input list="numero"  name="num3" ' . $col3 . ' placeholder=" "></div>';
$inputSig3 = '<div id="sig"><input list="simbolo" name="sig3" ' . $col3 . ' placeholder=" "></div></div>';

$inputNum4 = '<div class="carta"><div id="num"><input list="numero"  name="num4" ' . $col4 . ' placeholder=" "></div>';
$inputSig4 = '<div id="sig"><input list="simbolo" name="sig4" ' . $col4 . ' placeholder=" "></div></div>';

$inputNum5 = '<div class="carta"><div id="num"><input list="numero"  name="num5" ' . $col5 . ' placeholder=" "></div>';
$inputSig5 = '<div id="sig"><input list="simbolo" name="sig5" ' . $col5 . ' placeholder=" "></div></div>';

$inputNum6 = '<div class="carta"><div id="num"><input list="numero"  name="num6" ' . $col6 . ' placeholder=" "></div>';
$inputSig6 = '<div id="sig"><input list="simbolo" name="sig6" ' . $col6 . ' placeholder=" "></div></div>';

$inputNum7 = '<div class="carta"><div id="num"><input list="numero"  name="num7" ' . $col7 . ' placeholder=" "></div>';
$inputSig7 = '<div id="sig"><input list="simbolo" name="sig7" ' . $col7 . ' placeholder=" "></div></div>';

// Y ASINGNA DEPENDIENDO DE SI ESTAN SETEADAS LAS VARIABLES


if ($edit!="edit"){
	if ($num1!=""){$inputNum1 = '<div class="carta"> <div id="numP"><input type="text" name="num1" value="' . $num1 . '"' . $col1 . 'readonly></div>' ;}
	if ($sig1!=""){$inputSig1 = ' <div id="sigP"><input type="text" name="sig1" value="' . $sig1 . '"' . $col1 . 'readonly></div></div>' ;}

	if ($num2!=""){$inputNum2 = '<div class="carta"> <div id="numP"><input type="text" name="num2" value="' . $num2 . '"' . $col2 . 'readonly></div>' ;}
	if ($sig2!=""){$inputSig2 = ' <div id="sigP"><input type="text" name="sig2" value="' . $sig2 . '"' . $col2 . 'readonly></div></div>' ;}

	if ($num3!=""){$inputNum3 = '<div class="carta"> <div id="numP"><input type="text" name="num3" value="' . $num3 . '"' . $col3 . 'readonly></div>' ;}
	if ($sig3!=""){$inputSig3 = ' <div id="sigP"><input type="text" name="sig3" value="' . $sig3 . '"' . $col3 . 'readonly></div></div>' ;}

	if ($num4!=""){$inputNum4 = '<div class="carta"> <div id="numP"><input type="text" name="num4" value="' . $num4 . '"' . $col4 . 'readonly></div>' ;}
	if ($sig4!=""){$inputSig4 = ' <div id="sigP"><input type="text" name="sig4" value="' . $sig4 . '"' . $col4 . 'readonly></div></div>' ;}

	if ($num5!=""){$inputNum5 = '<div class="carta"> <div id="numP"><input type="text" name="num5" value="' . $num5 . '"' . $col5 . 'readonly></div>' ;}
	if ($sig5!=""){$inputSig5 = ' <div id="sigP"><input type="text" name="sig5" value="' . $sig5 . '"' . $col5 . 'readonly></div></div>' ;}

	if ($num6!=""){$inputNum6 = '<div class="carta"> <div id="numP"><input type="text" name="num6" value="' . $num6 . '"' . $col6 . 'readonly></div>' ;}
	if ($sig6!=""){$inputSig6 = ' <div id="sigP"><input type="text" name="sig6" value="' . $sig6 . '"' . $col6 . 'readonly></div></div>' ;}

	if ($num7!=""){$inputNum7 = '<div class="carta"> <div id="numP"><input type="text" name="num7" value="' . $num7 . '"' . $col7 . 'readonly></div>' ;}
	if ($sig7!=""){$inputSig7 = ' <div id="sigP"><input type="text" name="sig7" value="' . $sig7 . '"' . $col7 . 'readonly></div></div>' ;}

}


if ($edit == "edit"){


	$col1="";
	$col2="";
	$col3="";
	$col4="";
	$col5="";
	$col6="";
	$col7="";
	
	$inputNum1 = '<div class="carta"><div id="num"><input list="numero"  name="num1" ' . $col1 . ' placeholder="' . $num1 .' "></div>';
	$inputSig1 = '<div id="sig"><input list="simbolo" name="sig1" ' . $col1 . ' placeholder="' . $sig1 .' "></div></div>';

	$inputNum2 = '<div class="carta"><div id="num"><input list="numero"  name="num2" ' . $col2 . ' placeholder="' . $num2 .' "></div>';
	$inputSig2 = '<div id="sig"><input list="simbolo" name="sig2" ' . $col2 . ' placeholder="' . $sig2 .' "></div></div>';

	$inputNum3 = '<div class="carta"><div id="num"><input list="numero"  name="num3" ' . $col3 . ' placeholder="' . $num3 .' "></div>';
	$inputSig3 = '<div id="sig"><input list="simbolo" name="sig3" ' . $col3 . ' placeholder="' . $sig3 .' "></div></div>';

	$inputNum4 = '<div class="carta"><div id="num"><input list="numero"  name="num4" ' . $col4 . ' placeholder="' . $num4 .' "></div>';
	$inputSig4 = '<div id="sig"><input list="simbolo" name="sig4" ' . $col4 . ' placeholder="' . $sig4 .' "></div></div>';

	$inputNum5 = '<div class="carta"><div id="num"><input list="numero"  name="num5" ' . $col5 . ' placeholder="' . $num5 .' "></div>';
	$inputSig5 = '<div id="sig"><input list="simbolo" name="sig5" ' . $col5 . ' placeholder="' . $sig5 .' "></div></div>';

	$inputNum6 = '<div class="carta"><div id="num"><input list="numero"  name="num6" ' . $col6 . ' placeholder="' . $num6 .' "></div>';
	$inputSig6 = '<div id="sig"><input list="simbolo" name="sig6" ' . $col6 . ' placeholder="' . $sig6 .' "></div></div>';

	$inputNum7 = '<div class="carta"><div id="num"><input list="numero"  name="num7" ' . $col7 . ' placeholder="' . $num7 .' "></div>';
	$inputSig7 = '<div id="sig"><input list="simbolo" name="sig7" ' . $col7 . ' placeholder="' . $sig7 .' "></div></div>';



}

   ///////////////////////////////////////////////////////////////
  //////    TRANSPASAR NUMEROS ESPECIALES A NUMEROS   ///////////
 ///////////////////////////////////////////////////////////////

switch ($num1) {
	case 'A':
		$c1n = 1;
		break;

	case 'a':
		$c1n = 1;
		break;

	case '2':
		$c1n = 2;
		break;

	case '3':
		$c1n = 3;
		break;

	case '4':
		$c1n = 4;
		break;

	case '5':
		$c1n = 5;
		break;

	case '6':
		$c1n = 6;
		break;

	case '7':
		$c1n = 7;
		break;

	case '8':
		$c1n = 8;
		break;

	case '9':
		$c1n = 9;
		break;

	case '10':
		$c1n = 10;
		break;

	case 'J':
		$c1n = 11;
		break;

	case 'Q':
		$c1n = 12;
		break;	
		
	case 'K':
		$c1n = 13;
		break;		


	case 'j':
		$c1n = 11;
		break;

	case 'q':
		$c1n = 12;
		break;	
		
	case 'k':
		$c1n = 13;
		break;						
}

switch ($num2) {
	case 'A':
		$c2n = 1;
		break;

	case 'a':
		$c2n = 1;
		break;		

	case '2':
		$c2n = 2;
		break;

	case '3':
		$c2n = 3;
		break;

	case '4':
		$c2n = 4;
		break;

	case '5':
		$c2n = 5;
		break;

	case '6':
		$c2n = 6;
		break;

	case '7':
		$c2n = 7;
		break;

	case '8':
		$c2n = 8;
		break;

	case '9':
		$c2n = 9;
		break;

	case '10':
		$c2n = 10;
		break;

	case 'J':
		$c2n = 11;
		break;

	case 'Q':
		$c2n = 12;
		break;	
		
	case 'K':
		$c2n = 13;
		break;	

	case 'j':
		$c2n = 11;
		break;

	case 'q':
		$c2n = 12;
		break;	
		
	case 'k':
		$c2n = 13;
		break;								
}

switch ($num3) {
	case 'A':
		$c3n = 1;
		break;

	case 'a':
		$c3n = 1;
		break;


	case '2':
		$c3n = 2;
		break;

	case '3':
		$c3n = 3;
		break;

	case '4':
		$c3n = 4;
		break;

	case '5':
		$c3n = 5;
		break;

	case '6':
		$c3n = 6;
		break;

	case '7':
		$c3n = 7;
		break;

	case '8':
		$c3n = 8;
		break;

	case '9':
		$c3n = 9;
		break;

	case '10':
		$c3n = 10;
		break;

	case 'J':
		$c3n = 11;
		break;

	case 'Q':
		$c3n = 12;
		break;	
		
	case 'K':
		$c3n = 13;
		break;	


	case 'j':
		$c3n = 11;
		break;

	case 'q':
		$c3n = 12;
		break;	
		
	case 'k':
		$c3n = 13;
		break;							
}

switch ($num4) {
	case 'A':
		$c4n = 1;
		break;

	case 'a':
		$c4n = 1;
		break;		

	case '2':
		$c4n = 2;
		break;

	case '3':
		$c4n = 3;
		break;

	case '4':
		$c4n = 4;
		break;

	case '5':
		$c4n = 5;
		break;

	case '6':
		$c4n = 6;
		break;

	case '7':
		$c4n = 7;
		break;

	case '8':
		$c4n = 8;
		break;

	case '9':
		$c4n = 9;
		break;

	case '10':
		$c4n = 10;
		break;

	case 'J':
		$c4n = 11;
		break;

	case 'Q':
		$c4n = 12;
		break;	
		
	case 'K':
		$c4n = 13;
		break;		

	case 'j':
		$c4n = 11;
		break;

	case 'q':
		$c4n = 12;
		break;	
		
	case 'k':
		$c4n = 13;
		break;					
}					


switch ($num5) {
	case 'A':
		$c5n = 1;
		break;

	case 'a':
		$c5n = 1;
		break;		

	case '2':
		$c5n = 2;
		break;

	case '3':
		$c5n = 3;
		break;

	case '4':
		$c5n = 4;
		break;

	case '5':
		$c5n = 5;
		break;

	case '6':
		$c5n = 6;
		break;

	case '7':
		$c5n = 7;
		break;

	case '8':
		$c5n = 8;
		break;

	case '9':
		$c5n = 9;
		break;

	case '10':
		$c5n = 10;
		break;

	case 'J':
		$c5n = 11;
		break;

	case 'Q':
		$c5n = 12;
		break;	
		
	case 'K':
		$c5n = 13;
		break;		

	case 'j':
		$c5n = 11;
		break;

	case 'q':
		$c5n = 12;
		break;	
		
	case 'k':
		$c5n = 13;
		break;						
}

switch ($num6) {
	case 'A':
		$c6n = 1;
		break;

	case 'a':
		$c6n = 1;
		break;		

	case '2':
		$c6n = 2;
		break;

	case '3':
		$c6n = 3;
		break;

	case '4':
		$c6n = 4;
		break;

	case '5':
		$c6n = 5;
		break;

	case '6':
		$c6n = 6;
		break;

	case '7':
		$c6n = 7;
		break;

	case '8':
		$c6n = 8;
		break;

	case '9':
		$c6n = 9;
		break;

	case '10':
		$c6n = 10;
		break;

	case 'J':
		$c6n = 11;
		break;

	case 'Q':
		$c6n = 12;
		break;	
		
	case 'K':
		$c6n = 13;
		break;		

	case 'j':
		$c6n = 11;
		break;

	case 'q':
		$c6n = 12;
		break;	
		
	case 'k':
		$c6n = 13;
		break;						
}

switch ($num7) {
	case 'A':
		$c7n = 1;
		break;

	case 'a':
		$c7n = 1;
		break;		

	case '2':
		$c7n = 2;
		break;

	case '3':
		$c7n = 3;
		break;

	case '4':
		$c7n = 4;
		break;

	case '5':
		$c7n = 5;
		break;

	case '6':
		$c7n = 6;
		break;

	case '7':
		$c7n = 7;
		break;

	case '8':
		$c7n = 8;
		break;

	case '9':
		$c7n = 9;
		break;

	case '10':
		$c7n = 10;
		break;

	case 'J':
		$c7n = 11;
		break;

	case 'Q':
		$c7n = 12;
		break;	
		
	case 'K':
		$c7n = 13;
		break;	


	case 'j':
		$c7n = 11;
		break;

	case 'q':
		$c7n = 12;
		break;	
		
	case 'k':
		$c7n = 13;
		break;								
}

   ////////////////////////////////////////////////////
  //////    TRANSPASAR SIMBOLOS A LETRAS   ///////////
 ////////////////////////////////////////////////////

switch ($sig1) {
	case '♣':
		$c1o = "t";
		break;

	case '♠':
		$c1o = "p";
		break;

	case '♥':
		$c1o = "c";
		break;

	case '♦':
		$c1o = "d";
		break;		
}

switch ($sig2) {
	case '♣':
		$c2o = "t";
		break;

	case '♠':
		$c2o = "p";
		break;

	case '♥':
		$c2o = "c";
		break;

	case '♦':
		$c2o = "d";
		break;		
}

switch ($sig3) {
	case '♣':
		$c3o = "t";
		break;

	case '♠':
		$c3o = "p";
		break;

	case '♥':
		$c3o = "c";
		break;

	case '♦':
		$c3o = "d";
		break;		
}

switch ($sig4) {
	case '♣':
		$c4o = "t";
		break;

	case '♠':
		$c4o = "p";
		break;

	case '♥':
		$c4o = "c";
		break;

	case '♦':
		$c4o = "d";
		break;		
}

switch ($sig5) {
	case '♣':
		$c5o = "t";
		break;

	case '♠':
		$c5o = "p";
		break;

	case '♥':
		$c5o = "c";
		break;

	case '♦':
		$c5o = "d";
		break;		
}

switch ($sig6) {
	case '♣':
		$c6o = "t";
		break;

	case '♠':
		$c6o = "p";
		break;

	case '♥':
		$c6o = "c";
		break;

	case '♦':
		$c6o = "d";
		break;		
}

switch ($sig7) {
	case '♣':
		$c7o = "t";
		break;

	case '♠':
		$c7o = "p";
		break;

	case '♥':
		$c7o = "c";
		break;

	case '♦':
		$c7o = "d";
		break;		
}

//////////////////////////////////////////////


		if (isset($_REQUEST['paresA'])){
	            $paresA=$_REQUEST['paresA'];} 
		else {$paresA=0;}                      

		if ($pares==""){$pares=0;}


		if (isset($_REQUEST['piesA'])){
	            $piesA=$_REQUEST['piesA'];} 
		else {$piesA=0;}                      

		if ($pies==""){$pies=0;}


			if (isset($_REQUEST['pokeresA'])){
	            $pokeresA=$_REQUEST['pokeresA'];} 
		else {$pokeresA=0;}                      

		if ($pokeres==""){$pokeres=0;}

			if (isset($_REQUEST['escA'])){
	            $escA=$_REQUEST['escA'];} 
		else {$escA=0;}                      

		if ($pokeres==""){$pokeres=0;}




		if (isset($_REQUEST['fhA'])){
	        $fhA=$_REQUEST['fhA'];} 
		else {$fhA=0;}                      

		if ($fh==""){$fh="False";}


		if (isset($_REQUEST['colorA'])){
	        $colorA=$_REQUEST['colorA'];}
 		else {$colorA="False";}                      

		if ($color==""){$color="False";}

		if (isset($_REQUEST['escaleracolorA'])){
	        $escaleracolorA=$_REQUEST['escaleracolorA'];} 
		else {$escaleracolorA="False";}
		
		if ($escaleracolor==""){$escaleracolor="False";}

	$nums = array(); //lista de los numeros
	$sims = array(); // lista de los simbolos

	if ($c6n!="") {
		$ronda=5;
		if ($c7n!="") {
			$ronda=6;
		} 
		
	}else {
			$ronda=4;
		}


	$nums[0] = "0";
	$nums[1] = "0";
	$nums[2] = "0";
	$nums[3] = "0";
	$nums[4] = "0";
	
	
	// echo "ddd" . $c1n;






	if ($c1n != ""){$nums[0] = $c1n;}
	if ($c2n != ""){$nums[1] = $c2n;}
	if ($c3n != ""){$nums[2] = $c3n;}
	if ($c4n != ""){$nums[3] = $c4n;}
	if ($c5n != ""){$nums[4] = $c5n;}
	if ($ronda==5) {
		$nums[5] = $c6n;
	} 
	if ($ronda==6) {
		$nums[5] = $c6n;
		$nums[6] = $c7n;
	} 
	

	$sims[0] = $c1o;
	$sims[1] = $c2o;
	$sims[2] = $c3o;
	$sims[3] = $c4o;
	$sims[4] = $c5o;
	if ($ronda==5) {
		$sims[5] = $c6o;
	} 
	if ($ronda==6) {
		$sims[5] = $c6o;
		$sims[6] = $c7o;
	} 
	
	$carparesMesa= array() ;

		// CALCULO MANOS EN MESA
		
		$numsMesa=array();
	
		
		$numsMesa[]=$nums[2];
		$numsMesa[]=$nums[3];
		$numsMesa[]=$nums[4];

	if ($ronda==5) {$numsMesa[]=$nums[5];} 
	if ($ronda==6) {$numsMesa[]=$nums[5];
		$numsMesa[]=$nums[6];}

		//////////////////////////////

		$simsMesa[]=$sims[2];
		$simsMesa[]=$sims[3];
		$simsMesa[]=$sims[4];

	if ($ronda==5) {$simsMesa[]=$sims[5];} 
	if ($ronda==6) {$simsMesa[]=$sims[5];
		$simsMesa[]=$sims[6];} 
	
	$rondaMesa=$ronda-2;



	
	if($num3!="" and $num4!="" and $num5!="" ){	


		for ($a = 0;  $a <= $rondaMesa; $a++) {

	    for ($b = 0;  $b <= $rondaMesa; $b++) {
	    	if ($a != $b) {		// SI SON LA MISMA CARTA
	    		

	    			if ($numsMesa[$a] == $numsMesa[$b]){  // SI SON EL MISMO NUMERO

	    				$paresMesa++; // AGREGA A PARESMesa

	    				for ($bpie = $b+1;  $bpie <= $rondaMesa; $bpie++) { // PIERNAS

	    					
	    					if ($a != $bpie) {
	    						if ($numsMesa[$a] == $numsMesa[$bpie]){
	    							$piesMesa++;


	    							for($afh = 0; $afh <= $rondaMesa; $afh++){
	    								if ($afh!=$a and $afh!=$b and $afh != $bpie){

		    								for($bfh = 0; $bfh <= $rondaMesa; $bfh++){
			    								if ($bfh!=$a and $bfh!=$b and $bfh != $bpie){

		    										if($bfh != $afh){

		    											if($numsMesa[$bfh] == $numsMesa[$afh]){
		    												$fhMesa = "True";
		    											}
		    										}

			    								}
		    								}	
										}
	    							}



	    							for ($bpoker = $bpie+1;  $bpoker <= $rondaMesa; $bpoker++) {
	    								if ($a != $bpoker) {
	    									if ($numsMesa[$a] == $numsMesa[$bpoker]){
	    									$pokeresMesa++;
	    									$bpoker=$rondaMesa;
											}
										}
									} 



	    							$bpie=$rondaMesa;
								}

							}
	    		
	    
						} 
	    				$b=$rondaMesa;
	    			}
	    		
	    	}
	    		
	    
		}  
	} 

}


		// COLOR 

	for ($c=0; $c <= $rondaMesa; $c++) { 
		if ($simsMesa[$c]=="t"){
			$MESActreboles++;
		}
		if ($simsMesa[$c]=="p"){
			$MESAcpicas++;
		}
		if ($simsMesa[$c]=="c"){
			$MESAccorazones++;
		}
		if ($simsMesa[$c]=="d"){
			$MESAcdiamantes++;
		}
	}

	

	if ($MESActreboles >=5 or $MESAcpicas >=5 or $MESAccorazones >=5 or $MESAcdiamantes >=5){
		$colorMesa = "True";
	}
	
	$simArrayMesa = array();
	$simArrayMesa[] = $MESActreboles;
	$simArrayMesa[] = $MESAcpicas;
	$simArrayMesa[] = $MESAccorazones;
	$simArrayMesa[] = $MESAcdiamantes;
	rsort($simArrayMesa);
	if ($ronda==4) {
		if($simArrayMesa[0]==0){
			$RIVoddsColor = 0;
		}
		elseif($simArrayMesa[0]==1){
			$RIVoddsColor = 0.23;
		}
		elseif($simArrayMesa[0]==2){
			$RIVoddsColor = 2.4;
		}
		elseif($simArrayMesa[0]==3){
			$RIVoddsColor = 1.94;
		}
		
	}
	if ($ronda==5) {
		if($simArrayMesa[0]==0){
			$RIVoddsColor = 0;
		}
		elseif($simArrayMesa[0]==1){
			$RIVoddsColor = 0;
		}
		elseif($simArrayMesa[0]==2){
			$RIVoddsColor = 0.95;
		}
		elseif($simArrayMesa[0]==3){
			$RIVoddsColor = 10.59;
		}
		
		elseif($simArrayMesa[0]==4){
			$RIVoddsColor = 47.16;
		}
		
	}
	if ($ronda == 6){
	

		if($simArrayMesa[0]==0){
			$RIVoddsColor = 0;
		}
		elseif($simArrayMesa[0]==1){
			$RIVoddsColor = 0;
		}
		elseif($simArrayMesa[0]==2){
			$RIVoddsColor = 0;
		}
		elseif($simArrayMesa[0]==3){
			$RIVoddsColor = 4.16;
		}
		
		elseif($simArrayMesa[0]==4){
			$RIVoddsColor = 34;
		}
		
	}
	if ($colorMesa == "True"){$RIVoddsColor=100;}


		
		 ////////////////////////////////////////////////////////////////////////////////
		// NUMERO DE PARESMesa, PIERNA, POKER FULL PARA CARTAS EN MESA CON LAS DEL JUGADOR//
	   ////////////////////////////////////////////////////////////////////////////////

if($num1!="" and $num2!="" and $num3!="" and $num4!="" and $num5!="" ){	


	for ($a = 0;  $a <= $ronda; $a++) {

	    for ($b = 0;  $b <= $ronda; $b++) {
	    	if ($a != $b) {		// SI SON LA MISMA CARTA
	    		

	    			if ($nums[$a] == $nums[$b]){  // SI SON EL MISMO NUMERO

	    				$pares++; // AGREGA A PARESMesa

	    				for ($bpie = $b+1;  $bpie <= $ronda; $bpie++) { // PIERNAS

	    					
	    					if ($a != $bpie) {
	    						if ($nums[$a] == $nums[$bpie]){
	    							$pies++;
	    							for($afh = 0; $afh <= $ronda; $afh++){
	    								if ($afh!=$a and $afh!=$b and $afh != $bpie){

		    								for($bfh = 0; $bfh <= $ronda; $bfh++){
			    								if ($bfh!=$a and $bfh!=$b and $bfh != $bpie){

		    										if($bfh != $afh){

		    											if($nums[$bfh] == $nums[$afh]){
		    												$fh = "True";
		    											}
		    										}

			    								}
		    								}	
										}
	    							}

	    							for ($bpoker = $bpie+1;  $bpoker <= $ronda; $bpoker++) {
	    								if ($a != $bpoker) {
	    									if ($nums[$a] == $nums[$bpoker]){
	    									$pokeres++;


	    									$bpoker=$ronda;
											}

										}
	    		
	    
									} 

	    							$bpie=$ronda;
								}

							}
	    		
	    
						} 
	    				$b=$ronda;
	    			}
	    		
	    	}
	    		
	    
		}  
	} 

}
$cantidadcartastotal=array();
		// COLOR 

	for ($c=0; $c <= $ronda; $c++) { 
		if ($sims[$c]=="t"){
			$ctreboles++;
		}
		if ($sims[$c]=="p"){
			$cpicas++;
		}
		if ($sims[$c]=="c"){
			$ccorazones++;
		}
		if ($sims[$c]=="d"){
			$cdiamantes++;
		}
	}
	$cantidadcartastotal[1]=0;
	$cantidadcartastotal[2]=0;
	$cantidadcartastotal[3]=0;
	$cantidadcartastotal[4]=0;
	$cantidadcartastotal[5]=0;
	$cantidadcartastotal[6]=0;
	$cantidadcartastotal[7]=0;
	$cantidadcartastotal[8]=0;
	$cantidadcartastotal[9]=0;
	$cantidadcartastotal[10]=0;
	$cantidadcartastotal[11]=0;
	$cantidadcartastotal[12]=0;
	$cantidadcartastotal[13]=0;
	
	for ($t=0; $t <= $ronda; $t++) { 
		switch ($nums[$t]) {
			case '1':
				$cantidadcartastotal[1]++;
				break;
			case '2':
				$cantidadcartastotal[2]++;
				break;
			case '3':
				$cantidadcartastotal[3]++;
				break;
			case '4':
				$cantidadcartastotal[4]++;
				break;
			case '5':
				$cantidadcartastotal[5]++;
				break;
			case '6':
				$cantidadcartastotal[6]++;
				break;
			case '7':
				$cantidadcartastotal[7]++;
				break;
			case '8':
				$cantidadcartastotal[8]++;
				break;
			case '9':
				$cantidadcartastotal[9]++;
				break;
			case '10':
				$cantidadcartastotal[10]++;
				break;
			case '11':
				$cantidadcartastotal[11]++;
				break;
			case '12':
				$cantidadcartastotal[12]++;
				break;
			case '13':
				$cantidadcartastotal[13]++;
				break;
			
			
		}
	}
	for ($j=1; $j <=13 ; $j++) { 
		$cantidadcartastotal[$j]=4-$cantidadcartastotal[$j];
		// echo "<br>" . $j . " (". $cantidadcartastotal[$j] .  ")";
	}
	if ($ctreboles >=5 or $cpicas >=5 or $ccorazones >=5 or $cdiamantes >=5){
		$color = "True";

	}
	
	$simArray = array();
	$simArray[] = $ctreboles;
	$simArray[] = $cpicas;
	$simArray[] = $ccorazones;
	$simArray[] = $cdiamantes;


	rsort($simArray);
	 if ($ronda==4){
		if($simArray[0]<3){
			$oddsColor = 0;
		}
		elseif($simArray[0]==3){
			$oddsColor = 4.16;
		}
		
		elseif($simArray[0]==4){
			$oddsColor = 34;
		}
		
		elseif($simArray[0]>=5){
		$oddsColor = 100;
		}
	}

	elseif($ronda==5){
		if($simArray[0]==4){
			$oddsColor = 19.57;
		}
		else{$oddsColor = 0;}
	}

	if ($color == "True"){$oddsColor=100;}

	
		// ESCALERA  


	$numsSort=array();
	$numsSort[]=$nums[0];
	$numsSort[]=$nums[1];
	$numsSort[]=$nums[2];
	$numsSort[]=$nums[3];
	$numsSort[]=$nums[4];

	if (isset($nums[5])) {
			$numsSort[]=$nums[5];

		} 
		
		
		if (isset($nums[6])) {
			$numsSort[]=$nums[6];

		} 


		sort($numsSort);



		
		$numsO=array();
		$numsO[]=$numsSort[0];
		if ($numsSort[1]!== $numsSort[0]) {
			$numsO[]=$numsSort[1];
		}
		if ($numsSort[2]!== $numsSort[1]) {
			$numsO[]=$numsSort[2];
		}
		if ($numsSort[3]!== $numsSort[2]) {
			$numsO[]=$numsSort[3];
		}
		if ($numsSort[4]!== $numsSort[3]) {
			$numsO[]=$numsSort[4];
		}
		
		

		if (isset($numsSort[5])) {
			if ($numsSort[5]!== $numsSort[4]) {
			$numsO[]=$numsSort[5];
		}
		} 
		if (isset($numsSort[6])) {
			if ($numsSort[6]!== $numsSort[5]) {
			$numsO[]=$numsSort[6];
		}
		} 
		$simsO=array();
		$simsO[$nums[0]]=$sims[0];
		$simsO[$nums[1]]=$sims[1]; 
		$simsO[$nums[2]]=$sims[2];
		$simsO[$nums[3]]=$sims[3];
		$simsO[$nums[4]]=$sims[4];
		

		if (isset($sims[5])) {
			$simsO[$nums[5]]=$sims[5];
		} 
		
		
		if (isset($sims[6])) {
			$simsO[$nums[6]]=$sims[6];
		} 
		
		ksort($simsO);


		sort($numsO);  	//lista ordenada
		$caresc= array(); //un arrat con todas la cartas que juegan en la escalera asi la uso para la escalera a color


		$caresc[] = 0;
		$caresc[] = 0;
		$caresc[] = 0;
		$caresc[] = 0;
		$caresc[] = 0;

		$cantcart=count($numsO)-1;















		$numsSortMesa=array();
	$numsSortMesa[]=$numsMesa[0];
	$numsSortMesa[]=$numsMesa[1];
	$numsSortMesa[]=$numsMesa[2];
	

	if (isset($numsMesa[3])) {
			$numsSortMesa[]=$numsMesa[3];

		} 
		
		
		if (isset($numsMesa[4])) {
			$numsSortMesa[]=$numsMesa[4];

		} 


		sort($numsSortMesa);



		
		$numsOMesa=array();
		$numsOMesa[]=$numsSortMesa[0];
		if ($numsSortMesa[1]!== $numsSortMesa[0]) {
			$numsOMesa[]=$numsSortMesa[1];
		}
		if ($numsSortMesa[2]!== $numsSortMesa[1]) {
			$numsOMesa[]=$numsSortMesa[2];
		}
		
		
		

		if (isset($numsSortMesa[3])) {
			if ($numsSortMesa[3]!== $numsSortMesa[2]) {
			$numsOMesa[]=$numsSortMesa[3];
		}
		} 
		if (isset($numsSortMesa[4])) {
			if ($numsSortMesa[4]!== $numsSortMesa[3]) {
			$numsOMesa[]=$numsSortMesa[4];
		}
		} 
		$simsOMesa=array();
		$simsOMesa[$numsMesa[0]]=$simsMesa[0];
		$simsOMesa[$numsMesa[1]]=$simsMesa[1]; 
		$simsOMesa[$numsMesa[2]]=$simsMesa[2];

		
		

		if (isset($sims[3])) {
			$simsO[$nums[3]]=$sims[3];
		} 
		
		
		if (isset($sims[4])) {
			$simsO[$nums[4]]=$sims[4];
		} 
		
		ksort($simsOMesa);


		sort($numsOMesa);  	//lista ordenada
		$carescMesa= array(); //un arrat con todas la cartas que juegan en la escalera asi la uso para la escalera a color


		$carescMesa[] = 0;
		$carescMesa[] = 0;
		$carescMesa[] = 0;
		$carescMesa[] = 0;
		$carescMesa[] = 0;

		$cantcartMesa=count($numsOMesa)-1;
		// echo "dadasdas" . $cantcart;
		function analizadorEscalera($rondaescalera,$cartasanaEsc)
		{
			for ($d=1; $d<=$rondaescalera-3 ; $d++) { 

			
			if ($cartasanaEsc[$d-1] == ($cartasanaEsc[$d]-1)  ){
				if ($cartasanaEsc[$d] == ($cartasanaEsc[$d+1] - 1)  ){
					if ($cartasanaEsc[$d+1] == ($cartasanaEsc[$d+2] - 1)  ){
						if ($cartasanaEsc[$d+2] == ($cartasanaEsc[$d+3] - 1)  ){
							return "True";
							if ($simsO[$cartasanaEsc[$d]]==$simsO[$cartasanaEsc[$d-1]] and $simsO[$cartasanaEsc[$d]]==$simsO[$cartasanaEsc[$d+1]] and $simsO[$cartasanaEsc[$d]]==$simsO[$cartasanaEsc[$d+2]] and $simsO[$cartasanaEsc[$d]]==$simsO[$cartasanaEsc[$d+3]]) {
								$escaleracolor="true";
								
							}
							


						}
						}
					}
				}
			}
			
		}
		$esc= analizadorEscalera($cantcart,$numsO);
		$escMesa=analizadorEscalera($cantcartMesa,$numsOMesa);
		$cartasDispYo=6-$ronda;
		$cartasDispEl=2+$cartasDispYo;
		$oddsEscaleraganados=0;
	

function AnalizadorPosibilidades($cartasDisponibles, $Cantidaddecartas, $cartasaanalizar,$cantidadcartastotal){
					// echo $cartasDisponibles;

				

				// echo "  " . $caresc[0];
				// echo $caresc[1];
				// echo $caresc[2];
				// echo $caresc[3];
				// echo $caresc[4];
				$difNums=array();
				echo "<br>";

				for ($e=1; $e <=$Cantidaddecartas ; $e++) { 
					 // echo ($cartasaanalizar[$e]-$cartasaanalizar[$e-1]);
					 $difNums[$e]=($cartasaanalizar[$e]-$cartasaanalizar[$e-1]);
					 // echo "<br>";
				}

				$CantidaddecartasasUsadas=0;
				$cartasDisponibles2=$cartasDisponibles;

				
				$cartasUsadas=array();

				If ($cartasDisponibles==0){
					// echo "asdasd papa esto lo tenemos que resolver asdasd ";
				}
				$FFinal=0;
				$cartasUsadasFinales=array();
				$cartasUsadasFinalesdeauna=array();
				$cartasUsadasFinalesdeados=array();
				$cartasUsadasFinalesdeatres=array();
				$cartasUsadasFinalesdeacuatro=array();
				$r=0;

				$cartasEnCadena=0;
				$ContCartasUsadas=0;
				if ($cartasaanalizar[0]>$cartasDisponibles) {
					$cartasAntAcontar=$cartasDisponibles;
				}else{
					$cartasAntAcontar=$cartasaanalizar[0]-1;
				}


				$cartaAlRevez=0;



				$oddsEscaleraganados=0;
				$sumadepostot3=0;
				$sumadepostot4=0;
				$sumadepostot4ccc=0;
				$sumadepostot3ccc=0;

				for ($f=0; $f <=$Cantidaddecartas ; $f++) { 

						

					
						if ($f==0) {

							
						$cartasDisponibles2=$cartasDisponibles2-$cartasAntAcontar;
						
						$cartasEnCadena=$cartasEnCadena+$cartasAntAcontar;//ressollllveerrr errorr numero anteriorrrrrrrrrrrrrrrrrrrrrrrrrr

						for ($g=0; $g<=$cartasAntAcontar-1 ; $g++) { 
										$cartasUsadas[$ContCartasUsadas]=$cartasaanalizar[$f]-($cartasAntAcontar-$g);
										
										$CantidaddecartasasUsadas++;
										$ContCartasUsadas++;
									}
						
						
						}else{

								if ($difNums[$f]-1<=$cartasDisponibles2) {

									// echo "------" ;
									$cartasnecesarias=4-$cartasEnCadena;
									if ($cartasnecesarias>($difNums[$f]-1)) {
										$cartasquevoyausar=$difNums[$f]-1;
									}else{
										$cartasquevoyausar=$cartasnecesarias;
									}
									$cartasDisponibles2=$cartasDisponibles2-($cartasquevoyausar);
									$cartasEnCadena=$cartasEnCadena+$cartasquevoyausar+1;
									for ($g=0; $g<=$cartasquevoyausar-1 ; $g++) { 
										$cartasUsadas[$ContCartasUsadas]=$cartasaanalizar[$f-1]+($cartasquevoyausar)-$g;
										
										$CantidaddecartasasUsadas++;
										$ContCartasUsadas++;
									}
									// echo $cartasDisponibles2;
								}else{
										
										
													$cartasnecesarias=4-$cartasEnCadena;
													// echo "-----";
													if ($cartasnecesarias>($cartasDisponibles2)) {
														$cartasquevoyausar=$cartasDisponibles2;
													}else{
														$cartasquevoyausar=$cartasnecesarias;
													}
													$cartasEnCadena=$cartasEnCadena+$cartasquevoyausar;

													for ($g=0; $g<=$cartasquevoyausar-1 ; $g++) { 
													
														$cartasUsadas[$ContCartasUsadas]=$cartasaanalizar[$f-1]+$cartasquevoyausar-$g;
														
														$CantidaddecartasasUsadas++;
														$ContCartasUsadas++;
													}
													$cartasDisponibles2=$cartasDisponibles2-$cartasquevoyausar;

													if ($cartasEnCadena<4 and $cartasDisponibles2<=0) {
														$FFinal++;
														$f=$FFinal-1;
														$cartasDisponibles2=$cartasDisponibles;
														$cartasEnCadena=0;
														$ContCartasUsadas=0;
														$CantidaddecartasasUsadas=0;
													}
											
										

									
								}

							}


							if ($f==$Cantidaddecartas and $cartasEnCadena<4 and $cartasDisponibles2>0) {
									$cartasnecesarias=4-$cartasEnCadena;
									// echo "---tt--";
													if ($cartasnecesarias>($cartasDisponibles2)) {
														$cartasquevoyausar=$cartasDisponibles2;
													}else{
														$cartasquevoyausar=$cartasnecesarias;
													}
													$cartasEnCadena=$cartasEnCadena+$cartasquevoyausar;

													for ($g=0; $g<=$cartasquevoyausar-1 ; $g++) { 
													
														$cartasUsadas[$ContCartasUsadas]=$cartasaanalizar[$f]+$cartasquevoyausar-$g;
														
														$CantidaddecartasasUsadas++;
														$ContCartasUsadas++;
													}
													$cartasDisponibles2=$cartasDisponibles2-$cartasquevoyausar;

													if ($cartasEnCadena<4) {
														$FFinal++;
														$f=$FFinal-1;
														$cartasDisponibles2=$cartasDisponibles;
														$cartasEnCadena=0;
														$ContCartasUsadas=0;
														$CantidaddecartasasUsadas=0;
																}
								}

									
							if ($cartasEnCadena>=4) {
										echo "<br> <br>";
										for ($h=0; $h<=$CantidaddecartasasUsadas-1 ; $h++) { 
											$cartasUsadasFinales[$h]=$cartasUsadas[$h];
											// echo "cartas usadas (". $cartasUsadasFinales[$h] . ")"  ;
											
										}
										for ($y=0; $y <=count($cartasUsadasFinales)-1 ; $y++) { 
											switch ($cartasUsadasFinales[$y]) {
												case 10:
													$cartasUsadasFinales[$y]=0;//este swich lo puse porque necesito que sea solo un dígito
													break;
												case 11:
													$cartasUsadasFinales[$y]="j";
													break;
												case 12:
													$cartasUsadasFinales[$y]="q";
													break;
												case 13:
													$cartasUsadasFinales[$y]="k";
													break;
												
											
											}
										}
										$cantidadcartastotal[0]=$cantidadcartastotal[10];
										$cantidadcartastotal["j"]=$cantidadcartastotal[11];
										$cantidadcartastotal["q"]=$cantidadcartastotal[12];
										$cantidadcartastotal["k"]=$cantidadcartastotal[13];

										if (count($cartasUsadasFinales)==1) {
													if (isset($cartasUsadasFinalesdeauna[$cartasUsadasFinales[0]])) {
														# code...
													}else{

													$cartasUsadasFinalesdeauna[$cartasUsadasFinales[0]]=$cartasUsadasFinales[0];
													echo $cartasUsadasFinalesdeauna[$cartasUsadasFinales[0]];
													
													if ($cartasDisponibles==3) {
														$oddsEscaleraganados=$oddsEscaleraganados+ 100*(1-(((48-$cantidadcartastotal[$cartasUsadasFinales[0]])/48)*((47-$cantidadcartastotal[$cartasUsadasFinales[0]])/47)*((46-$cantidadcartastotal[$cartasUsadasFinales[0]])/46)));
													}
													if ($cartasDisponibles==2) {
														$oddsEscaleraganados=$oddsEscaleraganados+ 100*(1-(((47-$cantidadcartastotal[$cartasUsadasFinales[0]])/47)*((46-$cantidadcartastotal[$cartasUsadasFinales[0]])/46)));
													}
													if ($cartasDisponibles==1	) {
														$oddsEscaleraganados=$oddsEscaleraganados+100*(($cantidadcartastotal[$cartasUsadasFinales[0]]/46));
													}
													}
											}
										if (count($cartasUsadasFinales)==2) {
												if (isset($cartasUsadasFinalesdeauna[$cartasUsadasFinales[0]])) {
													# code...
												}else{
													if (isset($cartasUsadasFinalesdeauna[$cartasUsadasFinales[1]])) {
														# code...
													}else{

														$array_search1 =array_search($cartasUsadasFinales[0] . $cartasUsadasFinales[1], $cartasUsadasFinalesdeados);
														$array_search2 =array_search($cartasUsadasFinales[1] . $cartasUsadasFinales[0], $cartasUsadasFinalesdeados);
														// echo "ssss" . $array_search1 . "ssss"	;
														if ($array_search1===0 or  $array_search2===0 or  $array_search1===1 or  $array_search2===1 ) {
															// echo "qqqqq";
														}else{
															$cartasUsadasFinalesdeados[]=$cartasUsadasFinales[0] . $cartasUsadasFinales[1];
															if ($cartasDisponibles==2) {
																// echo "pijapijapija";
															
															$oddsEscaleraganados=$oddsEscaleraganados+100*(($cantidadcartastotal[$cartasUsadasFinales[0]]/47)*($cantidadcartastotal[$cartasUsadasFinales[1]]/46)+($cantidadcartastotal[$cartasUsadasFinales[1]]/47)*($cantidadcartastotal[$cartasUsadasFinales[0]]/46));
															// echo "((" .  100*(($cantidadcartastotal[$cartasUsadasFinales[0]]/47)*($cantidadcartastotal[$cartasUsadasFinales[1]]/46)+($cantidadcartastotal[$cartasUsadasFinales[1]]/47)*($cantidadcartastotal[$cartasUsadasFinales[0]]/46)) . "))";
															}
															if ($cartasDisponibles==3) {
																		for ($a=0; $a <=2 ; $a++) { 
																			for ($b=0; $b <=2 ; $b++) { 
																				for ($c=0; $c <=2 ; $c++) { 
																					if ($c!=$a and $c!=$b and $a!=$b) {
																						if ($a==2) {
																							$oddsprimeros=48-$cantidadcartastotal[$cartasUsadasFinales[0]];
																						}else{
																							$oddsprimeros=$cantidadcartastotal[$cartasUsadasFinales[$a]];
																						}
																						if ($b==2) {
																							$oddssegundos=47-$cantidadcartastotal[$cartasUsadasFinales[1]];
																						}else{
																							$oddssegundos=$cantidadcartastotal[$cartasUsadasFinales[$b]];
																						}
																						if ($c==2) {
																							$oddsterceros=46;
																						}else{
																							$oddsterceros=$cantidadcartastotal[$cartasUsadasFinales[$c]];
																						}
																						
																						$sumadepostot3ccc=$sumadepostot3ccc+($oddsprimeros/48)*($oddssegundos/47)*($oddsterceros/46);
																						
																					}else{

																					}
																				}
																			}
																		}
																		$oddsEscaleraganados=$oddsEscaleraganados+100*$sumadepostot3ccc;
																	
															}		
																	
														

															if ($cartasDisponibles==4) {
																	// echo "pablo";
																			for ($a=0; $a <=3 ; $a++) { 
																				for ($b=0; $b <=3 ; $b++) { 
																					for ($c=0; $c <=3 ; $c++) { 
																						for ($d=0; $d <=3 ; $d++) { 
																							if ($c!=$a and $c!=$b and $a!=$b and $c!=$d and $d!=$a and $d!=$b) {
																							if ($a>=2) {
																								$oddsprimeros=49-$cantidadcartastotal[$cartasUsadasFinales[0]];
																							}else{
																								$oddsprimeros=$cantidadcartastotal[$cartasUsadasFinales[$a]];
																							}
																							if ($b>=2) {
																								$oddssegundos=48-$cantidadcartastotal[$cartasUsadasFinales[1]];
																							}else{
																								$oddssegundos=$cantidadcartastotal[$cartasUsadasFinales[$b]];
																							}
																							if ($c>=2) {
																								if ($oddssegundos==48-$cantidadcartastotal[$cartasUsadasFinales[1]]) {
																									$oddsterceros=47-$cantidadcartastotal[$cartasUsadasFinales[1]];
																								}else{
																									$oddsterceros=47;
																								}
																							}else{
																								$oddsterceros=$cantidadcartastotal[$cartasUsadasFinales[$c]];
																							}
																							if ($d>=2) {
																								$oddscuartos=46;
																							}else{
																								$oddscuartos=$cantidadcartastotal[$cartasUsadasFinales[$d]];
																							}
																							
																							$sumadepostot4ccc=$sumadepostot4ccc+($oddsprimeros/49)*($oddssegundos/48)*($oddsterceros/47)*($oddscuartos/46);
																							
																							
																						}else{

																						}
																						
																						}
																						
																					}
																				}
																			}
																			$oddsEscaleraganados=$oddsEscaleraganados+100*$sumadepostot4ccc;
																			// echo "{" . $oddsEscaleraganados . "}";
																}
															
														

														
													}
												}
											}	
										}
											
										if (count($cartasUsadasFinales)==3) {
											$serches=array();
													$repetido3=0;
													// echo "555"; 	
										
													for ($a=0; $a <=2 ; $a++) { 
														for ($b=0; $b <=2 ; $b++) { 
															for ($c=0; $c <=2 ; $c++) { 
																if ($c!=$a and $c!=$b and $a!=$b) {
																	// echo "iii" . array_search($cartasUsadasFinales[0] . $cartasUsadasFinales[$b].  $cartasUsadasFinales[$c], $cartasUsadasFinalesdeatres);
																	// $serches[] =array_search($cartasUsadasFinales[$a] . $cartasUsadasFinales[$b].  $cartasUsadasFinales[$c], $cartasUsadasFinalesdeatres);

																}else{

																}
															}
														}
													}
													for ($a=0; $a <=2 ; $a++) { 
														for ($b=0; $b <=2 ; $b++) { 
															
																if ($b!=$a) {
																	// echo array_search($cartasUsadasFinales[$a] . $cartasUsadasFinales[$b], $cartasUsadasFinalesdeados);

																	$serches[] =array_search($cartasUsadasFinales[$a] . $cartasUsadasFinales[$b], $cartasUsadasFinalesdeados);
																}else{

																}
															
														}
													}

													for ($a=0; $a <12 ; $a++) { 
														if (isset($serches[$a])) {
															if ($serches[$a]===0) {
															$repetido3="true";
															// echo "truetradsda";
															}
															if ($serches[$a]===1) {
																$repetido3="true";
																// echo "truetradsda";
															}
															if ($serches[$a]===2) {
																$repetido3="true";
																// echo "truetradsda";
															}
														}
														
													}
													foreach($serches as $x => $x_value) {
													    // echo "Key=" . $x . ", Value=" . $x_value;
													    // echo "<br>";
													}

													// echo "pp". $repetido3 . "qq";
													$sumadepostot3=0;
													if (isset($cartasUsadasFinalesdeauna[$cartasUsadasFinales[0]])) {
														// echo "wrong`1";
													}else{
														if (isset($cartasUsadasFinalesdeauna[$cartasUsadasFinales[1]])) {
															// echo "wrong`3";
														}else{
															if (isset($cartasUsadasFinalesdeauna[$cartasUsadasFinales[2]])) {
															// echo "wrong`2";
															}else{

																if ($repetido3==="true") {
																	echo $repetido3;
																}else{
																	// echo "juan";
																	
																	$cartasUsadasFinalesdeatres[]=$cartasUsadasFinales[0] . $cartasUsadasFinales[1]. $cartasUsadasFinales[2];
																	if ($cartasDisponibles==3) {
																		for ($a=0; $a <=2 ; $a++) { 
																		for ($b=0; $b <=2 ; $b++) { 
																			for ($c=0; $c <=2 ; $c++) { 
																				if ($c!=$a and $c!=$b and $a!=$b) {
																					$sumadepostot3=$sumadepostot3+($cantidadcartastotal[$cartasUsadasFinales[$a]]/48)*($cantidadcartastotal[$cartasUsadasFinales[$b]]/47)*($cantidadcartastotal[$cartasUsadasFinales[$c]]/46);
																				}else{

																				}
																			}
																		}
																	}
																	$oddsEscaleraganados=$oddsEscaleraganados+100*$sumadepostot3;
																	}
																	if ($cartasDisponibles==4) {
																															
																	
																			for ($a=0; $a <=3 ; $a++) { 
																				for ($b=0; $b <=3 ; $b++) { 
																					for ($c=0; $c <=3 ; $c++) { 
																						for ($d=0; $d <=3 ; $d++) { 
																							if ($c!=$a and $c!=$b and $a!=$b and $c!=$d and $d!=$a and $d!=$b) {
																							if ($a==3) {
																								$oddsprimeros=49-$cantidadcartastotal[$cartasUsadasFinales[0]];
																							}else{
																								$oddsprimeros=$cantidadcartastotal[$cartasUsadasFinales[$a]];
																							}
																							if ($b==3) {
																								$oddssegundos=48-$cantidadcartastotal[$cartasUsadasFinales[1]];
																							}else{
																								$oddssegundos=$cantidadcartastotal[$cartasUsadasFinales[$b]];
																							}
																							if ($c==3) {
																								$oddsterceros=48-$cantidadcartastotal[$cartasUsadasFinales[2]];
																							}else{
																								$oddsterceros=$cantidadcartastotal[$cartasUsadasFinales[$c]];
																							}
																							if ($d==3) {
																								$oddscuartos=46;
																							}else{
																								$oddscuartos=$cantidadcartastotal[$cartasUsadasFinales[$d]];
																							}
																							
																							$sumadepostot4ccc=$sumadepostot4ccc+($oddsprimeros/49)*($oddssegundos/48)*($oddsterceros/47)*($oddscuartos/46);
																							
																						}else{

																						}
																						}
																						
																					}
																				}
																			}
																		$oddsEscaleraganados=$oddsEscaleraganados+100*$sumadepostot4ccc;
																	}
																	
																}
																
																	 

															}

															

															
															

															
														}
													}
													
											}
										if (count($cartasUsadasFinales)==4) {
											$serches=array();
													$repetido4=0;
												
													for ($a=0; $a <=3 ; $a++) { 
														for ($b=0; $b <=3 ; $b++) { 
															for ($c=0; $c <=3 ; $c++) { 
																for ($d=0; $d <=3 ; $d++) { 
																	if ($c!=$a and $c!=$b and $a!=$b and $c!=$d and $d!=$a and $d!=$b) {
																	$serches[] =array_search($cartasUsadasFinales[$a] . $cartasUsadasFinales[$b].  $cartasUsadasFinales[$c]. $cartasUsadasFinales[$d], $cartasUsadasFinalesdeacuatro);
																}else{

																}
																}
																
															}
														}
													}


													for ($a=0; $a <=3 ; $a++) { 
														for ($b=0; $b <=3 ; $b++) { 
															for ($c=0; $c <=3 ; $c++) { 
																if ($c!=$a and $c!=$b and $a!=$b) {
																	$serches[] =array_search($cartasUsadasFinales[$a] . $cartasUsadasFinales[$b].  $cartasUsadasFinales[$c], $cartasUsadasFinalesdeatres);
																}else{

																}
															}
														}
													}
													for ($a=0; $a <=3 ; $a++) { 
														for ($b=0; $b <=3 ; $b++) { 
															
																if ($b!=$a) {
																	echo array_search($cartasUsadasFinales[$a] . $cartasUsadasFinales[$b], $cartasUsadasFinalesdeados);

																	$serches[] =array_search($cartasUsadasFinales[$a] . $cartasUsadasFinales[$b], $cartasUsadasFinalesdeados);
																}else{

																}
															
														}
													}

													for ($a=0; $a <12 ; $a++) { 
														if (isset($serches[$a])) {
															if ($serches[$a]===0) {
															$repetido3="true";
															// echo "truetradsda";
															}
															if ($serches[$a]===1) {
																$repetido3="true";
																// echo "truetradsda";
															}
															if ($serches[$a]===2) {
																$repetido3="true";
																// echo "truetradsda";
															}
															if ($serches[$a]===3) {
																$repetido3="true";
																// echo "truetradsda";
															}
														}
														
													}

													
													$sumadepostot4=0;
													if (isset($cartasUsadasFinalesdeauna[$cartasUsadasFinales[0]])) {
														// echo "wrong`1";
													}else{
														if (isset($cartasUsadasFinalesdeauna[$cartasUsadasFinales[1]])) {
															// echo "wrong`3";
														}else{
															if (isset($cartasUsadasFinalesdeauna[$cartasUsadasFinales[2]])) {
															// echo "wrong`2";
															}else{
																if (isset($cartasUsadasFinalesdeauna[$cartasUsadasFinales[3]])) {
															// echo "wrong`2";
															}else{

																if ($repetido4==="true") {
																	// echo $repetido4;
																}else{
																	// echo "juan";
																	
																	$cartasUsadasFinalesdeacuatro[]=$cartasUsadasFinales[0] . $cartasUsadasFinales[1]. $cartasUsadasFinales[2]. $cartasUsadasFinales[3];
																	
																	for ($a=0; $a <=2 ; $a++) { 
																		for ($b=0; $b <=2 ; $b++) { 
																			for ($c=0; $c <=2 ; $c++) { 
																				for ($d=0; $d <=3 ; $d++) { 
																					if ($c!=$a and $c!=$b and $a!=$b and $c!=$d and $d!=$a and $d!=$b) {
																						// echo "ttttttttt";
																					// $sumadepostot3=$sumadepostot3+($cantidadcartastotal[$cartasUsadasFinales[$a]]/48)*($cantidadcartastotal[$cartasUsadasFinales[$b]]/47)*($cantidadcartastotal[$cartasUsadasFinales[$c]]/46);
																						$sumadepostot4=$sumadepostot4+($cantidadcartastotal[$cartasUsadasFinales[$a]]/49)*($cantidadcartastotal[$cartasUsadasFinales[$b]]/48)*($cantidadcartastotal[$cartasUsadasFinales[$c]]/47)*($cantidadcartastotal[$cartasUsadasFinales[$d]]/46);
																					}else{

																					}
																				}
																				
																			}
																		}
																	}

																}
																$oddsEscaleraganados=$oddsEscaleraganados+100*$sumadepostot4;
																	 
															}
															}

															

															
															

															
														}
													}
													
											}
											
										
										$FFinal++;
										$f=$FFinal-1;
										$cartasDisponibles2=$cartasDisponibles;
										$cartasEnCadena=0;
										$ContCartasUsadas=0;
										$CantidaddecartasasUsadas=0;
										echo "<br> <br>";
							}else{
										if ($f>=$Cantidaddecartas) {
										if ($FFinal<$Cantidaddecartas) {
											$FFinal++;
											$f=$FFinal-1;
											$cartasDisponibles2=$cartasDisponibles;
											$cartasEnCadena=0;
											$ContCartasUsadas=0;
											$CantidaddecartasasUsadas=0;
											}
										}	
									}	
									
				}


				

				return $oddsEscaleraganados;
					
				
						
	}
			


		
	

					
		/*echo $nums[$ronda];*/
		function analizadorEscalerarara($rondaescalerarara,$cartasanaEscrara){
			$escA=0;
			if ($cartasanaEscrara[$rondaescalerarara]==13){
			
				if ($cartasanaEscrara[0]==1){
				$escA++;
				$numaxA=1;
					if ($cartasanaEscrara[1]==2) {
						$escA++;
						$numaxA=2;
							if ($cartasanaEscrara[2]==3) {
								$escA++;
								$numaxA=3;
									if ($cartasanaEscrara[3]==4) {
									$escA++;
									$numaxA=4;
									}
							
							}
						}
					}
				

				if ($cartasanaEscrara[$rondaescalerarara-1]==12){
				$escA++;
				
					if ($cartasanaEscrara[$rondaescalerarara-2]==11) {
						$escA++;
						
							if ($cartasanaEscrara[$rondaescalerarara-3]==10) {
								$escA++;
								
									
							
							}
						}
					}
				}

				if ($escA >= 4){
				return "True";
				$escalerarara="True";
						}
		}
		$escraraanalizada= analizadorEscalerarara($cantcart,$numsO);
		if (isset($escraraanalizada)) {
			$esc= analizadorEscalerarara($cantcart,$numsO);
		}
		$escraraanalizadaMesa= analizadorEscalerarara($cantcartMesa,$numsOMesa);

		if (isset($escraraanalizadaMesa)) {
			$escMesa= analizadorEscalerarara($cantcartMesa,$numsOMesa);
		}		
		


				


			if ($escalerarara=="True"){
				switch ($numaxA) {
				case 1:
					// $caresc[] = 0;
					// $caresc[] = $ronda;
					// $caresc[] = $ronda-1;
					// $caresc[] = $ronda-2;
					// $caresc[] = $ronda-3;
					
					if ($simsO[$numsO[0]]==$simsO[$numsO[$cantcart]] and $simsO[$numsO[0]]==$simsO[$numsO[$cantcart-1]] and $simsO[$numsO[0]]==$simsO[$numsO[$cantcart-2]] and $simsO[$numsO[0]]==$simsO[$numsO[$cantcart-3]]) {
								$escaleracolor="true";
								
							}
					
					break;
				case 2:
					// $caresc[] = 0;
					// $caresc[] = $ronda;
					// $caresc[] = $ronda-1;
					// $caresc[] = $ronda-2;
					// $caresc[] = 1;
					if ($simsO[$numsO[0]]==$simsO[$numsO[$cantcart]] and $simsO[$numsO[0]]==$simsO[$numsO[$cantcart-1]] and $simsO[$numsO[0]]==$simsO[$numsO[$cantcart-2]] and $simsO[$numsO[0]]==$simsO[$numsO[1]]) {
								$escaleracolor="true";
								
							}
					
					break;
				case 3:
					// $caresc[] = 0;
					// $caresc[] = $cantcart;
					// $caresc[] = $ronda-1;
					// $caresc[] = 2;
					// $caresc[] = 1;
					if ($simsO[$numsO[0]]==$simsO[$numsO[$cantcart]] and $simsO[$numsO[0]]==$simsO[$numsO[$cantcart-1]] and $simsO[$numsO[0]]==$simsO[$numsO[2]] and $simsO[$numsO[0]]==$simsO[$numsO[1]]) {
								$escaleracolor="true";
								
							}
					

					break;
				case 4:
					// $caresc[] = 0;
					// $caresc[] = $ronda;
					// $caresc[] = 3;
					// $caresc[] = 2;
					// $caresc[] = 1;
					if ($simsO[$numsO[0]]==$simsO[$numsO[$cantcart]] and $simsO[$numsO[0]]==$simsO[$numsO[3]] and $simsO[$numsO[0]]==$simsO[$numsO[2]] and $simsO[$numsO[0]]==$simsO[$numsO[1]]) {
								$escaleracolor="true";
								
							}
					
					break;
				}
			}
			$oddsEscalera=number_format(AnalizadorPosibilidades($cartasDispYo, $cantcart, $numsO, $cantidadcartastotal),2);
			$RIVoddsEscalera=number_format(AnalizadorPosibilidades($cartasDispEl, $cantcartMesa, $numsOMesa, $cantidadcartastotal),2);

			// echo "((((((((((". $RIVoddsEscalera . "))))))))";


			// foreach($numsOMesa as $x => $x_value) {
			//     echo "Key=" . $x . ", Value=" . $x_value;
			//     echo "<br>";
			// }

			// echo "<br>";
			// echo "<br>";
			// echo "<br>";
			// foreach($numsO as $x => $x_value) {
			//     echo "Key=" . $x . ", Value=" . $x_value;
			//     echo "<br>";
			// }			

	// if ($manoCont=="par") {
	// 	return $paresMesa;
		
	// }






	// for ($cartaA=1; $cartaA ==(52-$ronda) ; $cartaA++) { 
		
	// 	if ($cartaA<=13){
	// 		$simA="p";
	// 		$numA = $cartaA;}

	// 	if ($cartaA<=26 and $cartA>=14){
	// 		$simA="c";
	// 		$numA = $cartaA-13;	}

	// 	if ($cartaA<=39 and $cartA>=27){
	// 		$simA="t";
	// 		$numA = $cartaA-26;	}

	// 	if ($cartaA<=52 and $cartA>=40){
	// 		$simA="d";
	// 		$numA = $cartaA-39;	}	


	// 	analizador($numA,$simA,5);


	// }







$pares = $pares/2;
$pies = $pies/3;
$pokeres = $pokeres/4;
$paresA = $pares;
$piesA = $pies;
$pokeresA = $pokeres;
$fhA = $fh;
$colorA = $color;
$escA = $esc;
$escaleracolorA=$escaleracolor;

$paresMesa = $paresMesa/2;
$piesMesa = $piesMesa/3;
$pokeresMesa = $pokeresMesa/4;
$paresMesaA = $paresMesa;
$piesMesaA = $piesMesa;
$pokeresMesaA = $pokeresMesa;
$fhMesaA = $fhMesa;
$colorMesaA = $colorMesa;
$escMesaA = $escMesa;
$escaleracolorMesaA=$escaleracolorMesa;

if($escA==""){$escA="False";}
if($escMesaA==""){$escMesaA="False";}

/////    MANO JUGADOR /////////

if ($escaleracolorA=="True"){$hand = "Escalera Color";}
	elseif ($pokeresA==1){$hand = "Poker";}
		elseif ($fhA=="True"){$hand = "Full";}
			elseif ($colorA=="True"){$hand = "Color";}
				elseif ($escA=="True"){$hand = "Escalera";}
					elseif ($piesA==1){$hand = "Pierna";}
						elseif ($paresA==2){$hand = "Doble Par";}
							elseif ($paresA==1){$hand = "Par";}
								else{$hand="Nada";}	

	/////  MANO MESA /////////


if ($escaleracolorMesaA=="True"){$handMesa = "Escalera Color";}
	elseif ($pokeresMesaA==1){$handMesa = "Poker";}
		elseif ($fhMesaA=="True"){$handMesa = "Full";}
			elseif ($colorMesaA=="True"){$handMesa = "Color";}
				elseif ($escMesaA=="True"){$handMesa = "Escalera";}
					elseif ($piesMesaA==1){$handMesa = "Pierna";}
						elseif ($paresMesaA==2){$handMesa = "Doble Par";}
							elseif ($paresMesaA==1){$handMesa = "Par";}
								else{$handMesa="Nada";}	


	// RONDA 4 = flop   (3 cartas en mesa)
	//   ->  5 = turn 	(4 cartas en mesa)
	//   ->  6 = river  (5 cartas en mesa)


	switch ($ronda) {
		case 4:
			$ronda ="flop";
			break;

		case 5:
			$ronda ="turn";
			break;

		case 6:
			$ronda ="river";
			break;					

	}

//////////// ODDS //////////////////////////


if($num1!="" and $num2!="" and $num3!="" and $num4!="" and $num5!="" ){	

	if ($ronda == "flop"){
		switch ($hand) {

			case 'Nada':
				$oddsPar = 58.5;
				$oddsDoblePar = 8.3;
				$oddsPierna = 1.39;
				$oddsFull = 0;
				$oddsPoker = 0;
				break;

			case 'Par':
				$oddsPar = 100;
				$oddsDoblePar = 40.24;
				$oddsPierna = 8.4;
				$oddsFull = 2.5;
				$oddsPoker = 0.09;
				break;	

			case 'Doble Par':
				$oddsPar = 0;
				$oddsDoblePar = 100;
				$oddsPierna = 0;
				$oddsFull = 16.74;
				$oddsPoker = 0.18;	
				break;

			case 'Pierna':
				$oddsPar = 0;
				$oddsDoblePar = 0;
				$oddsPierna = 100;
				$oddsFull = 29.83;
				$oddsPoker = 4.26;
				break;	

			case 'Full':
				$oddsPar = 0;
				$oddsDoblePar = 0;
				$oddsPierna = 0;
				$oddsFull = 100;
				$oddsPoker = 4.31;	
				break;	

			case 'Poker':
				$oddsPar = 0;
				$oddsDoblePar = 0;
				$oddsPierna = 0;
				$oddsFull = 0;
				$oddsPoker = 100;	
				break;			
		}

		//////  ODDS RIVAL

		if($num3!="" and $num4!="" and $num5!="" ){

			switch ($handMesa) {
				case 'Nada':
					$RIVoddsPar = 74.6;
					$RIVoddsDoblePar = 22.06;
					$RIVoddsPierna = 4.82;
					$RIVoddsFull = 1.46;
					$RIVoddsPoker = 0.06;
					break;

				case 'Par':
					$RIVoddsPar = 100;
					$RIVoddsDoblePar = 50.9;
					$RIVoddsPierna = 15.8;
					$RIVoddsFull = 7.64;
					$RIVoddsPoker = 0.51;
					break;

				case 'Pierna':
					$RIVoddsPar = 0;
					$RIVoddsDoblePar = 0;
					$RIVoddsPierna = 100;
					$RIVoddsFull = 34.22;
					$RIVoddsPoker = 8.22;
					break;			


		}	
		}
		}

	elseif ($ronda == "turn"){
		switch ($hand) {

			case 'Nada':
				$oddsPar = 39.5;
				$oddsDoblePar = 0;
				$oddsPierna = 0;
				$oddsFull = 0;
				$oddsPoker = 0;
				break;

			case 'Par':
				$oddsPar = 100;
				$oddsDoblePar = 26.08;
				$oddsPierna = 4.34;
				$oddsFull = 0;
				$oddsPoker = 0;
				break;	

			case 'Doble Par':
				$oddsPar = 0;
				$oddsDoblePar = 100;
				$oddsPierna = 0; 		
				$oddsFull = 8.69;
				$oddsPoker = 0;	
				break;

			case 'Pierna':
				$oddsPar = 0;
				$oddsDoblePar = 0;
				$oddsPierna = 100;
				$oddsFull = 19.57;
				$oddsPoker = 2.17;
				break;	

			case 'Full':
				$oddsPar = 0;
				$oddsDoblePar = 0;
				$oddsPierna = 0;
				$oddsFull = 100;
				$oddsPoker = 2.17;	
				break;	

			case 'Poker':
				$oddsPar = 0;
				$oddsDoblePar = 0;
				$oddsPierna = 0;
				$oddsFull = 0;
				$oddsPoker = 100;	
				break;			
		}
		


		
		//////  ODDS RIVAL

		if($num3!="" and $num4!="" and $num5!="" ){

			switch ($handMesa) {
				case 'Nada':
					$RIVoddsPar = 70.18;
					$RIVoddsDoblePar = 16.3;
					$RIVoddsPierna = 3.14;
					$RIVoddsFull = 1.04;
					$RIVoddsPoker = 0.02;
					break;

				case 'Par':
					$RIVoddsPar = 100;
					$RIVoddsDoblePar = 47.71;
					$RIVoddsPierna = 12.33;
					$RIVoddsFull = 5.43;
					$RIVoddsPoker = 0.27;
					break;

				case 'Doble Par':
					$RIVoddsPar = 0;
					$RIVoddsDoblePar = 100;
					$RIVoddsPierna = 0;
					$RIVoddsFull = 23.27;
					$RIVoddsPoker = 0.52;
					break;					

				case 'Pierna':
					$RIVoddsPar = 0;
					$RIVoddsDoblePar = 0;
					$RIVoddsPierna = 100;
					$RIVoddsFull = 34.57;
					$RIVoddsPoker = 6.27;
					break;			
				}	
		}
	}

	elseif ($ronda == "river"){
		switch ($hand) {

			case 'Nada':
				$oddsPar = 0;
				$oddsDoblePar = 0;
				$oddsPierna = 0;
				$oddsFull = 0;
				$oddsPoker = 0;
				break;

			case 'Par':
				$oddsPar = 100;
				$oddsDoblePar = 0;
				$oddsPierna = 0;
				$oddsFull = 0;
				$oddsPoker = 0;
				break;	

			case 'Doble Par':
				$oddsPar = 0;
				$oddsDoblePar = 100;
				$oddsPierna = 0; 		
				$oddsFull = 0;
				$oddsPoker = 0;	
				break;

			case 'Pierna':
				$oddsPar = 0;
				$oddsDoblePar = 0;
				$oddsPierna = 100;
				$oddsFull = 0;
				$oddsPoker = 0;
				break;	

			case 'Full':
				$oddsPar = 0;
				$oddsDoblePar = 0;
				$oddsPierna = 0;
				$oddsFull = 100;
				$oddsPoker = 0;	
				break;	

			case 'Poker':
				$oddsPar = 0;
				$oddsDoblePar = 0;
				$oddsPierna = 0;
				$oddsFull = 0;
				$oddsPoker = 100;	
				break;			
		}
		


		//////  ODDS RIVAL

		if($num3!="" and $num4!="" and $num5!="" ){

			switch ($handMesa) {
				case 'Nada':
					$RIVoddsPar = 58.5;
					$RIVoddsDoblePar = 8.3;
					$RIVoddsPierna = 1.39;
					$RIVoddsFull = 0;
					$RIVoddsPoker = 0;
					break;

				case 'Par':
					$RIVoddsPar = 100;
					$RIVoddsDoblePar = 40.24;
					$RIVoddsPierna = 8.4;
					$RIVoddsFull = 2.5;
					$RIVoddsPoker = 0.09;
					break;

				case 'Doble Par':
					$RIVoddsPar = 0;
					$RIVoddsDoblePar = 100;
					$RIVoddsPierna = 0;
					$RIVoddsFull = 16.74;
					$RIVoddsPoker = 0.18;
					break;					

				case 'Pierna':
					$RIVoddsPar = 0;
					$RIVoddsDoblePar = 0;
					$RIVoddsPierna = 100;
					$RIVoddsFull = 29.83;
					$RIVoddsPoker = 4.26;
					break;			


		}	
		}

	}

}

if ($esc=="True") {
	$oddsEscalera=100;
}
if ($escMesa=="True") {
	$RIVoddsEscalera=100;
}



$todosRIVoddsPar=$RIVoddsPar;
$todosRIVoddsDoblePar=$RIVoddsDoblePar;
$todosRIVoddsPierna=$RIVoddsPierna;
$todosRIVoddsEscalera=$RIVoddsEscalera;
$todosRIVoddsColor=$RIVoddsColor;
$todosRIVoddsFull=$RIVoddsFull;
$todosRIVoddsPoker=$RIVoddsPoker;

for ($i=2; $i <$jugadores ; $i++) { 
	$todosRIVoddsPar=$todosRIVoddsPar+($todosRIVoddsPar*(100-$todosRIVoddsPar))/100;

}
for ($i=2; $i <$jugadores ; $i++) { 
	$todosRIVoddsDoblePar=$todosRIVoddsDoblePar+($todosRIVoddsDoblePar*(100-$todosRIVoddsDoblePar))/100;

}
for ($i=2; $i <$jugadores ; $i++) { 
	$todosRIVoddsPierna=$todosRIVoddsPierna+($todosRIVoddsPierna*(100-$todosRIVoddsPierna))/100;

}
for ($i=2; $i <$jugadores ; $i++) { 
	$todosRIVoddsEscalera=$todosRIVoddsEscalera+($todosRIVoddsEscalera*(100-$todosRIVoddsEscalera))/100;

}
for ($i=2; $i <$jugadores ; $i++) { 
	$todosRIVoddsColor=$todosRIVoddsColor+($todosRIVoddsColor*(100-$todosRIVoddsColor))/100;

}
for ($i=2; $i <$jugadores ; $i++) { 
	$todosRIVoddsFull=$todosRIVoddsFull+($todosRIVoddsFull*(100-$todosRIVoddsFull))/100;

}
for ($i=2; $i <$jugadores ; $i++) { 
	echo "string";
	echo "$todosRIVoddsPoker";
	$todosRIVoddsPoker=$todosRIVoddsPoker+($todosRIVoddsPoker*(100-$todosRIVoddsPoker))/100;
	echo "<br> $todosRIVoddsPoker";

}
//$todosRIVoddsPar

$OddsParFinales=(((100-$todosRIVoddsPoker)/100)*((100-$todosRIVoddsFull)/100)*((100-$todosRIVoddsEscalera)/100)*((100-$todosRIVoddsColor)/100)*((100-$todosRIVoddsPierna)/100)*((100-$todosRIVoddsDoblePar)/100)*((100-$todosRIVoddsPar)/100)*100);
$OddsDobleParFinales=(((100-$todosRIVoddsPoker)/100)*((100-$todosRIVoddsFull)/100)*((100-$todosRIVoddsEscalera)/100)*((100-$todosRIVoddsColor)/100)*((100-$todosRIVoddsPierna)/100)*((100-$todosRIVoddsDoblePar)/100)*100);
$OddsPiernaFinales=(((100-$todosRIVoddsPoker)/100)*((100-$todosRIVoddsFull)/100)*((100-$todosRIVoddsEscalera)/100)*((100-$todosRIVoddsColor)/100)*((100-$todosRIVoddsPierna)/100*100));
$OddsEscaleraFinales=(((100-$todosRIVoddsPoker)/100)*((100-$todosRIVoddsFull)/100)*((100-$todosRIVoddsColor)/100)*((100-$todosRIVoddsEscalera)/100)*100);
$OddsColorFinales=(((100-$todosRIVoddsPoker)/100)*((100-$todosRIVoddsFull)/100)*((100-$todosRIVoddsColor)/100)*100);
$OddsFullFinales=(((100-$todosRIVoddsPoker)/100)*((100-$todosRIVoddsFull)/100)*100);
$OddsPokerFinales=(((100-$todosRIVoddsPoker)/100)*100);




$oddsParSuperFinales=$oddsPar*$OddsParFinales/100;
$oddsDobleParSuperFinales=$oddsDoblePar*$OddsDobleParFinales/100;
$oddsPiernaSuperFinales=$oddsPierna*$OddsPiernaFinales/100;
$oddsescaleraSuperFinales=$oddsEscalera*$OddsEscaleraFinales/100;
$oddscolorSuperFinales=$oddsColor*$OddsColorFinales/100;
$oddsfullSuperFinales=$oddsFull*$OddsFullFinales/100;
$oddspokerSuperFinales=$oddsPoker*$OddsPokerFinales/100;

echo "<br> $oddsParSuperFinales <br> $$oddsDobleParSuperFinales <br> $oddsPiernaSuperFinales <br> $oddsescaleraSuperFinales <br> $oddscolorSuperFinales <br> $oddsfullSuperFinales <br> $oddspokerSuperFinales " ;




$GANAR=100-(((100-$oddspokerSuperFinales)/100)*((100-$oddsfullSuperFinales)/100)*((100-$oddscolorSuperFinales)/100)*((100-$oddsescaleraSuperFinales)/100)*((100-$oddsPiernaSuperFinales)/100)*((100-$oddsDobleParSuperFinales)/100)*((100-$oddsParSuperFinales)/100)*100);


echo " $jugadores ((((((((((((((((((((((((((((((((($GANAR)))))))))))))))))))))))))))))))))";

$GANAR = round($GANAR,2);

if ($GANAR<50){
	$rojo = 255;
	$verde=0.5*$GANAR*2.55;
}

if($GANAR>=50){
	$rojo = 0.5*$GANAR*2.55;
	$verde=255;
}

$colorINPUT= "rgba($rojo,$verde,0,0.5)";
if ($c3n==""){$colorINPUT= "rgba(255,255,255,255)";}



$inputFINAL = '<input type="text" value="' . $GANAR . '%" style="background-color:  ' . $colorINPUT . '; width: 10vw; box-shadow:0 0 20px 4px ' . $colorINPUT . '; ">';

if ($c3n==""){$inputFINAL="";}

?>

</div>
	<!--  - - INPUTS - -  -->

	<div class="p"><p> PokerStats.net </p></div>

<div class ="container">
<div class ="juego">

	<div class="cartas1">
	 
	 <?php echo $inputNum3; ?>
	 <?php echo $inputSig3; ?>
	 <?php echo $inputNum4; ?>
	 <?php echo $inputSig4; ?>
	 <?php echo $inputNum5; ?>
     <?php echo $inputSig5; ?>
	 <?php echo $inputNum6; ?>
	 <?php echo $inputSig6; ?>
	 <?php echo $inputNum7; ?>
	 <?php echo $inputSig7; ?>
</div>
<div class="cartas2">
	 <?php echo $inputNum1; ?>
	 <?php echo $inputSig1; ?>
	 <?php echo $inputNum2; ?>
	 <?php echo $inputSig2; ?>
	
	</div>
</div>
	<div class="bar">
	<div class="btns">
	<div class ="sub"><button type="submit" name=""><img src="ok.png"></button></div>

	<div class ="res"><button type="text" name="res" value ="res"><img src="reset.png"></button></div>

	<div class ="edit"><button type="text" name="edit" value ="edit"><img src="edit.png"></button></div>

	<div class ="random"><button type="text" name="random" value ="random"><img src="random.png"></button></div>

	<div class="jugadores">
		<img src="jugadores.png">
		<input type="number" min = "2" name="jugadores" value="<?php echo $jugadores; ?>" ></div>

	</div>

	<div class="result">
		<?php echo $inputFINAL; ?>
	</div>

	<div class="txts">
	<input type="hidden" name="numA" value="<?php echo $num1; ?>">
	    <input type="hidden" name="numA" value="<?php echo $sig1; ?>">

	<input type="hidden" name="numA" value="<?php echo $num2; ?>">
		<input type="hidden" name="numA" value="<?php echo $sig2; ?>">

	<input type="hidden" name="numA" value="<?php echo $num3; ?>">
		<input type="hidden" name="numA" value="<?php echo $sig3; ?>">

	<input type="hidden" name="numA" value="<?php echo $num4; ?>">
		<input type="hidden" name="numA" value="<?php echo $sig4; ?>">

	<input type="hidden" name="numA" value="<?php echo $num5; ?>">
		<input type="hidden" name="numA" value="<?php echo $sig5; ?>">

	<input type="hidden" name="numA" value="<?php echo $num6; ?>">
		<input type="hidden" name="numA" value="<?php echo $sig6; ?>">

	<input type="hidden" name="numA" value="<?php echo $num7; ?>">
		<input type="hidden" name="numA" value="<?php echo $sig7; ?>">


	<datalist id="numero">
	  <option value="A">
	  <option value="2">
	  <option value="3">
	  <option value="4">
	  <option value="5">
	  <option value="6">
	  <option value="7">
	  <option value="8">
	  <option value="9">
	  <option value="10">
	  <option value="J">
	  <option value="Q">
	  <option value="K">
	</datalist>

	<datalist id="simbolo">
	  <option value="♠">
	  <option value="♥">
	  <option value="♣">
	  <option value="♦">

	</datalist>

	 <input type="hidden" name="paresA" value="<?php echo "ParesMesa: " . $paresA  ?>">
	 <input type="hidden" name="piesA" value="<?php echo "Pierna: " . $piesA  ?>">
	 <input type="hidden" name="pokeresA" value="<?php echo "Poker: " . $pokeresA  ?>">
	 <input type="hidden" name="fhA"     value="<?php echo "Full: " . $fhA  ?>">
	 <input type="hidden" name="colorA" value="<?php echo "Color: " . $colorA  ?>">
	 <input type="hidden" name="escA" value="<?php echo "Escalera: " . $escA  ?>">
	 <input type="hidden" name="escaleracolorA" value="<?php echo "Esc Color: " . $escaleracolorA  ?>">

	 <input type="text" name="handA" value="<?php echo "Mano: " . $hand  ?>" style="width: 8vw;">
	 <input type="text" name="handA" value="<?php echo "Mano en Mesa: " . $handMesa  ?>" style="width: 11vw;">
	 <input type="text" name="odds" value="<?php echo "Par:  " . $oddsPar . "% | " . $RIVoddsPar . "%"  ?>"style="width: 9vw;">
	 <input type="text" name="odds" value="<?php echo "Doble Par:  " . $oddsDoblePar . "% | " . $RIVoddsDoblePar . "%"  ?>"style="width: 13vw;">
	 <input type="text" name="odds" value="<?php echo "Pierna:  " . $oddsPierna  . "% | " . $RIVoddsPierna . "%"  ?>" style="width: 10vw;">
	 <input type="text" name="odds" value="<?php echo "Full:  " . $oddsFull . "% | " . $RIVoddsFull . "%"  ?>" style="width: 10vw;">
	 <input type="text" name="odds" value="<?php echo "Poker:  " . $oddsPoker . "% | "  . $RIVoddsPoker . "%" ?>" style="width: 10vw;">
	 <input type="text" name="odds" value="<?php echo "Color:  " . $oddsColor . "% | " . $RIVoddsColor . "%" ?>" style="width: 10vw;">
	 <input type="text" name="odds" value="<?php echo "Escalera:  " . $oddsEscalera . "% | " . $RIVoddsEscalera . "%" ?>" style="width: 11vw;">


	</div>

</div>
</div>

</form>

</body>
</html>