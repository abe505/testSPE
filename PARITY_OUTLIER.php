<?php
function find($integers) {
  $odds = [];
  $evens = [];
  foreach ($integers as $item) {
    if ($item % 2) array_push($odds, $item);
    else array_push($evens, $item);
  }
  
  //return (count($evens) === 1 ? $evens[0] : $odds[0]);
	echo count($evens) === 1 ? "Should return: ".$evens[0] : (count($odds) === 1 ? "Should return: ".$odds[0]:"Should return: FALSE");
}
 
// Driver Code
$n = [5,3,1,2,-20];
find($n);


?>
