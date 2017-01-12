// https://codility.com/demo/results/trainingPEQTVC-XME/

// $N = Number of counters
// $A = Array of values
function solution($N, $A) 
{
    $counters = array_fill(0, $N, 0);
    $max_counter = 0;
    $last_max_counter_operation = -1;
    
    foreach ($A as $operation)
    {
        if ($operation == ($N+1))   
        {
            if ($max_counter != $last_max_counter_operation)
            {
                foreach ($counters as $key => $counter)
                {
                    $counters[$key] = $max_counter;   
                }
                $last_max_counter_operation = $max_counter;
            }
        }
        else
        {
            $counters[$operation-1]++;  
            if ($counters[$operation-1] > $max_counter) $max_counter = $counters[$operation-1];
        }
    }
    
    return $counters;
}
