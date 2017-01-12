// https://codility.com/demo/results/trainingMASE2Z-HBW/

function solution($A) 
{   
    $numberOfElements = count ($A);
    
    if ($numberOfElements === 1)
    {
        return $A[0];
    }
    else if ($numberOfElements === 2)
    {
        return abs($A[0] - $A[1]);
    }
    else
    {
        $sum = array_sum($A);
        
        $bestValue = 10000;
        $rightTotal = 0;
        $leftTotal = $sum;

        for ($i = $numberOfElements-1; $i > 0; $i--)
        {
            $rightTotal += $A[$i];
            $leftTotal -= $A[$i];
            $currentValue = abs($leftTotal - $rightTotal); 
            
            if ($currentValue < $bestValue)
            {
                $bestValue = $currentValue;
            }
        }
        
        return $bestValue;
    }
    
    
}
