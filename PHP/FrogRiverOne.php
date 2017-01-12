// https://codility.com/demo/results/trainingC8TNBT-DPT/

// $X = Position next bank
// $A = Array of leaves
function solution($X, $A) 
{
    $found = [];
    
    foreach ($A as $key => $element)
    {
       if ($element <= $X) $found[$element] = true;
       if (count($found) == $X) return $key;
    }
    
    return -1;
}
