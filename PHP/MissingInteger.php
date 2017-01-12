// https://codility.com/demo/results/trainingZ92ZAB-6EQ/

function solution($A) 
{
    $A = array_flip ($A);
    $i = 1;

    while (true)
    {
        if (!isset($A[$i])) return $i; 
        $i++;
    }
}
