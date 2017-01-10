// Ref: https://codility.com/demo/results/trainingT276N8-QAF/

function solution($N) 
{
    $binary_string = decbin($N);
    
    $best_gap = 0;
    $in_gap = false;
    $current_gap = 0;
    
    for ($i = 0; $i < strlen($binary_string); $i++)
    {
        if ($binary_string[$i] == '1')
        {
            if ($in_gap)
            {
                if ($current_gap > $best_gap) $best_gap = $current_gap;
                
                $current_gap = 0; // We reset the current gap
            }
            else
            {
                $in_gap = true;   
            }
        }
        else
        {
            $current_gap++;
        }
    }
    
    return $best_gap;
}
