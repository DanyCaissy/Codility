// https://codility.com/demo/results/trainingUCFB7U-JUD/

function solution($A) 
{
    $count = count($A);
    sort($A);
    
    if ($A[0] != 1) return 1;
    if ($A[$count-1] != $count+1) return $count+1;
    
    for ($i = 1; $i < count($A); $i++)
    {
        if (($A[$i-1]+1) != ($A[$i])) return ($A[$i]-1);
    }
    
    return $A[0];
}
