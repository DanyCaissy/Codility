// https://codility.com/demo/results/trainingU7EWSX-2ST/

function solution($A) 
{
    $number_of_ones_right = array_sum($A);
    $total_passing_cars = 0;
    
    foreach ($A as $value)
    {
        if ($value == 0) 
        {
            $total_passing_cars += $number_of_ones_right;
            if ($total_passing_cars > 1000000000) return -1;
        }
        else 
        {
            $number_of_ones_right--;
        }
    }
    
    return $total_passing_cars;
}
