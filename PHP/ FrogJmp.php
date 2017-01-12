// https://codility.com/demo/results/trainingKW3PUX-34Z/#task-0

// X = position
// Y = objective
// D = distance jumped
function solution($X, $Y, $D) 
{
    $distance_to_reach = $Y - $X;
    return intval(ceil($distance_to_reach/$D));  
}
