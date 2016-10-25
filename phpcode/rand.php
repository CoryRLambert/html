<?php
?>
<!DOCTYPE html>
<html><head><title>Random Letter Generater</title>

</head>
<body>
    <center>
<hl>
Random Letter Generater
</hl>


<tt>
<?php
	for($i = 0; $i <100; $i++){
		//echo(rand() . "<br>");
		//echo(rand() . "<br>");
		//echo(rand(65,91));
		//echo "<br />";
	$a = (rand(65,91));
	$b = (rand(65,91));
	$c = (rand(65,91));
	$d = (rand(65,91));
	$e = (rand(65,91));
	$f = (rand(65,91));
	$g = (rand(65,91));
	$h = (rand(65,91));	
	$i = (rand(65,91));
		//echo "$a $b $c";
	$ac = chr($a);
	$bc = chr($b);
	$cc = chr($c);
	$dc = chr($d);
	$ec = chr($e);
	$fc = chr($f);
	$gc = chr($h);
	$hc = chr($g);
	$ic = chr($i);
		//echo "<br />";
		//echo "$ac $bc $cc $dc $ec $fc $gc $hc $ic";
	$txt = $ac.$bc.$cc.$dc.$ec.$fc.$gc.$hc.$ic;
	echo "$txt&nbsp;";
	if($i % 5 == 0 ){echo "<br />";
	}
}
?>
</tt>
