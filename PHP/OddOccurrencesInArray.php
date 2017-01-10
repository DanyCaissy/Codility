// https://codility.com/demo/results/trainingYTYE8W-6E7/#task-0

function solution($A) 
{
    $found = [];
    
    for ($i = 0; $i < count($A); $i++)
    {
        $value = $A[$i];
        
        if (isset($found[$value])) // Element found twice, delete from the found list
        {
            unset ($found[$value]);
        }
        else
        {
            $found[$value] = $value;
        }
    }
    
    return array_sum($found);
}
