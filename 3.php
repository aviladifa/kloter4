<?php

$num_char 	 = 7; 
$onehalf 	 = floor($num_char / 2);
$onehalf_var = $onehalf;
$char1 		 = '=';
$char2 		 = '@';

echo '<div style="font:bold 16px courier new; line-height:20px;">';
for ($row = 1; $row <= $num_char; $row++)
{
	for ($col = 1; $col <= $num_char; $col++)
	{
		$char =	$col > $onehalf_var && $col <= ($num_char - $onehalf_var) ? $char2 : $char1;
		echo $char;	
	}
	$row <= $onehalf ? $onehalf_var-- : $onehalf_var++;	
	echo '<br/>';
}
echo '</div>';


?>