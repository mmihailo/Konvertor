<?php

$amount = $_POST['amount'];
$from = $_POST['from'];
$to = $_POST['to'];

$string = "1".$from."=?".$to;

$google_url = "http://www.google.com/ig/calculator?hl=en&q=".$string;

$result = file_get_contents($google_url);

$result = explode('"', $result);

$converted_amount = explode(' ', $result[3]);
$conversion = $converted_amount[0];
$conversion = $conversion * $amount;
$conversion = round($conversion, 2);

$rhs_text = ucwords(str_replace($converted_amount[0],"",$result[3]));

$rhs = $conversion.$rhs_text;

$google_lhs = explode(' ', $result[1]);
$from_amount = $google_lhs[0];

$from_text = ucwords(str_replace($from_amount,"",$result[1]));

$lhs = $amount." ".$from_text;

echo $lhs." = ".$rhs;exit;
?>