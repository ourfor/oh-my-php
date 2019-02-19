<?php
function recursive($num){
	if($num==1) return 1;
	else return recursive($num - 1) * $num;
}
echo recursive(14);

$my = new mysqli("localhost","web","2320813747");
