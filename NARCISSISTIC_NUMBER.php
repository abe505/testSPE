<?php
function countDigit($n)
{
    if ($n == 0)
        return 0;
 
    return (1 + countDigit($n / 10));
}
 
// Returns true if n is
// Narcissistic number
function narcissistic( $n)
{
    // count the number of digits
    $l = countDigit($n);
    $dup = $n;
    $sum = 0;
 
    // calculates the sum of digits
    // raised to power
    while ($dup)
    {
        $sum += pow($dup % 10, $l);
        $dup = (int)$dup / 10;
    }
 
    return ($n == $sum);
}
 
// Driver Code
$n = 1634;
if (narcissistic(!$n))
    echo "yes";
else
    echo "no";

    
?>
