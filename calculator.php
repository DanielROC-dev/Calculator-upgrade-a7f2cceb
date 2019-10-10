<?php

echo "> Welke operatie wil je uitvoeren? (+, -, %)" . PHP_EOL;
$multiplier = readline("> ");
if ($multiplier === '+' || $multiplier === '-' || $multiplier === '%' ){
} else {
	echo "> incorrect multiplier"  . PHP_EOL . "> shutting down"; 
	exit(); 
}	echo "> Eerste getal?" . PHP_EOL;
	$first = readline("> ");
	if (!is_numeric($first)) {echo "> non numeric number" . PHP_EOL . "> shutting down"; 
	exit();} 
	echo "> Tweede getal?" . PHP_EOL;
	$second = readline("> ");
	if (is_numeric($second)) {} 
	else { 
	echo "> non numeric number" . PHP_EOL . "> shutting down"; 
	exit(); 
} if ( $multiplier === '+' ) {
echo "> " . ($first + $second);
} 
if ( $multiplier === '-' ) {
echo "> " . ($first - $second);
} 
if ( $multiplier === '%' ) {
echo "> " . ($first % $second);
} exit();
?>

