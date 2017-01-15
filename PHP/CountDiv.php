// https://codility.com/demo/results/trainingADDZN9-HJ6/

function solution($A, $B, $K) 
{
    $fitInA = (int)($A/$K); // How many times $A is divisible by $K (6/2 = 3)
    $fitInB = (int)($B/$K); // How many times $B is divisible by $K (11/2 = 5)

    $bonus = ($A % $K == 0) ? 1 : 0; // Is $A directly divisible by $K (yes)
    return $fitInB - $fitInA + $bonus; // 5 - 3 + 1 = 3
}
