<?php
echo "hello";
?>
&nbsp;hello
<?php
echo "<h1>";
	for ($i = 0; $i < 100; $i++){
		if($i % 2 == 0 ){
				echo"<div class=\"r1\" >";
			}else{
			echo"<div class=\"r2\" >";
		}
		
		echo "* * * * * * * * $i * * * * * * * *<br />";
		echo "</div>";
		
	}
?>
