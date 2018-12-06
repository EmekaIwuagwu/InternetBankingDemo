<?php

$tcode = 5000;
$transaction_code = $_GET['transaction_code'];

if($transaction_code !=$tcode)
{
	echo("<script language ='javascript'>window.alert('Transaction Code does not Match!'); window.location.href='transfers.php?Failed';</script>");
}
else 
{
	header('Location: Confirm_transfer.php');
}

?>
