// https://codility.com/demo/results/trainingTJFQH6-P2S/

function solution($A, $K) 
{
    if (count($A) < 2 || $K == 0) return $A;
    
    $cycles_left = $K % count($A);
    
    while ($cycles_left > 0)
    {
        array_unshift($A, array_pop($A));
        $cycles_left--;  
    }
    
    return $A;
}
