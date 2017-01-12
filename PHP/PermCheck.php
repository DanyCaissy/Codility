// https://codility.com/demo/results/trainingADMKPH-97N/

function solution($A) 
{
    sort ($A);
    
    foreach ($A as $key => $element)
    {
        if ($key+1 != $element) return 0;        
    }
    
    return 1;
}
