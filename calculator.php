<?php

echo "> Welke operatie wil je uitvoeren? (+, -, %)" . PHP_EOL;
$multiplier = readline("> ");


if ( $multiplier === '+' ) {
	echo "> Eerste getal?" . PHP_EOL;
	$first1 = readline("> ");
	if (is_numeric($first1)) {} 
	else {echo "> non numeric number" . PHP_EOL . "> shutting down"; 
	exit(); }
	echo "> Tweede getal?" . PHP_EOL;
	$second1 = readline("> ");
	if (is_numeric($second1)) {} 
	else {echo "> non numeric number" . PHP_EOL . "> shutting down"; 
	exit(); }
	echo "> " . ( $first1 + $second1);
} else if ( $multiplier === '-' ) 
{ 
	echo "> Eerste getal?" . PHP_EOL;
	$first2 = readline("> ");
	if (is_numeric($first2)) {} 
	else {echo "> non numeric number" . PHP_EOL . "> shutting down"; 
	exit(); }
	echo "> Tweede getal?" . PHP_EOL;
	$second2 = readline("> ");
	if (is_numeric($second2)) {} 
	else {echo "> non numeric number" . PHP_EOL . "> shutting down"; 
	exit(); }
	echo "> " . ( $first2 - $second2);
} else if ( $multiplier === '%' ) 
{ 
	echo "> Eerste getal?" . PHP_EOL;
	$first3 = readline("> ");
	if (is_numeric($first3)) {} 
	else {echo "> non numeric number" . PHP_EOL . "> shutting down"; 
	exit(); }
	echo "> Tweede getal?" . PHP_EOL;
	$second3 = readline("> ");
	if (is_numeric($second3)) {} 
	else {echo "> non numeric number" . PHP_EOL . "> shutting down"; 
	exit(); }
	echo "> " . ( $first3 % $second3);
} else {echo "> no correct multipliers entered" . PHP_EOL . "> shutting down";
exit();
}

?>