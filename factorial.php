<?php
function factorial($number)
{
    if($number < 0 )
    {
        return"factorial is not defined for negative numbers.";
    }
    elseif($number==0)
    {
        return 1;
    }
else
{
    $factorial = 1;
    for( $i=1;$i<=$number;$i++){
        $factorial *=$i;
    }
    return$factorial;   
}

}
//examble usage
$number=5;
$factorial = factorial($number);
echo"the factorial of $number is:$factorial";

?>