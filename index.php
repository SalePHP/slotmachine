<!DOCTYPE html>
<html>
   <head>
      <title>Slot Masina</title>
	  <meta charset="UTF-8">
</head>
<body>
<button onclick="location.reload()">Okreni</button>
   <?php
	$p1 = rand(1,10);
	$p2 = rand(1,10);
	$p3 = rand(1,10);
	
	if($p1 == 3){
		$p1 = "&#9786";
	}
	if($p2 == 3){
		$p2 = "&#9786";
	}
	if($p3 == 3){
		$p3 = "&#9786";
	}
	
	echo "<p>$p1 <>$p2 <> $p3</p>";
	
	
	if(($p1 == "&#9786")&&($p2 == "&#9786")&&($p3 == "&#9786")) {
		echo "<h1>Glavni dobitak +100$</h1>";
	}else if(
		(($p1 == "&#9786")&&($p2 == "&#9786"))
		||
		(($p1 == "&#9786")&&($p3 == "&#9786"))
		||
		(($p2 == "&#9786")&&($p3 == "&#9786"))
		){
			echo "<h2>Dobitak +10$</h2>";
	}else if(($p1 == $p2)&&($p2 == $p3)){
			echo "<h3>tri iste.. + 7$";
	}else if
	(($p1==$p2)||($p2==$p3)||($p1==$p3)){
			echo "<h4>Najmanji dobitak...+ 1$</h4>";
	}else {
		echo "<p>Vise srece drugi put...</p>";
	}
?>
</body>
</html>