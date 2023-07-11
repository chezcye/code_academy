<?php
// Variables to hold the amount of each foreign currency.
$riel = 2103942;
$kyat = 19092;
$krones = 109;
$lek = 9094;

// Print a statement to notify how much currency we have initially. 
echo " At the start of your transaction, you have $riel riel, $kyat kyat, $krones krones, and $lek lek.";

// Store the exchange rate for each currency in a variable.
$US_riel = $riel  * 0.00024;
echo "\n $US_riel";

$US_kyat = $kyat * 0.00048;
echo "\n $US_kyat";

$US_krones = $krones * 0.092;
echo "\n $US_krones";

$US_lek = $lek * 0.010;
echo "\n $US_lek";

//  Calculate the US dollar that will be exchanged minus the $1 fee for each currency conversion.
$total = $US_riel + $US_kyat + $US_krones + $US_lek - 4;

// Calculate the final amount. 
echo "\n $total";
