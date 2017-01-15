// https://codility.com/demo/results/training53N8SU-X7N/
// 75%, needs minor improvement

// A - 1
// C - 2
// G - 3
// T - 4

// $S - CAGCCTA
// $P $Q - Array of integers
// $M - Number of integers

function solution($S, $P, $Q) 
{
    $value_per_letter = ['A' => 1, 'C' => 2, 'G' => 3, 'T' => 4];
    $dna_count = strlen($S);
    
    $possible_letters = ['A', 'C', 'G']; // First 3, we know if it isnt in the first 3 its def T
    $array_position_per_letter = [];
  
    // Build the arrays
    for ($i = 0; $i < $dna_count; $i++)
    {
        $current_letter = $S[$i];
        
        foreach ($possible_letters as $letter)
        {
            $last_value = 0;
            if (isset ($array_position_per_letter[$letter][$i-1])) $last_value = $array_position_per_letter[$letter][$i-1];
            
            if ($current_letter == $letter) $last_value++;
            
            $array_position_per_letter[$letter][$i] = $last_value;
        }
    }
    
    $result_array = [];
    for ($i = 0; $i < count($P); $i++)
    {
        $first = $P[$i];
        $last = $Q[$i];
        
        if ($first == $last) $result_array[$i] = $value_per_letter[$S[$first]];
        else if ($array_position_per_letter['A'][$first] != $array_position_per_letter['A'][$last]) $result_array[$i] = $value_per_letter['A'];
        else if ($array_position_per_letter['C'][$first] != $array_position_per_letter['C'][$last]) $result_array[$i] = $value_per_letter['C'];
        else if ($array_position_per_letter['G'][$first] != $array_position_per_letter['G'][$last]) $result_array[$i] = $value_per_letter['G'];
        else $result_array[$i] = $value_per_letter['T']; // Has to be only T's
    }
    
    return $result_array;
    
}
