// https://codility.com/demo/results/training7RJPQC-WTR/

// We only calculate 2 and 3 slices, there is mathematical proof that 4+ will never be better than 2 or 3
function solution($A)
{
   $count = count($A);
   $minimum_slice_average = (($A[0] + $A[1]) / 2);
   $minimum_position = 0;
   
   for ($i = 0; $i < ($count-2); $i++)
   {
        $double_slice_average = (($A[$i] + $A[$i+1]) / 2);
        $triple_slice_average = (($A[$i] + $A[$i+1] + $A[$i+2]) / 3);
        $lowest_average = min($double_slice_average, $triple_slice_average);

        if ($lowest_average < $minimum_slice_average)  // If we beat the minimum, update the minimums found
        {
            $minimum_position = $i;
            $minimum_slice_average = $lowest_average;
        }
   }
   
   // Try a double slice for the last two records since the loop stops at -2
    $lowest_average = (($A[$count-1] + $A[$count-2]) / 2); 
    if ($lowest_average < $minimum_slice_average) $minimum_position = $i;
    
    return $minimum_position;
   
}
