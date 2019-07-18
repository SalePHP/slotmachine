
<!DOCTYPE HTML>
<html>
        <!-- Slotovi vježba
        $img =0;
        $p1 = rand(1,5);
        $p2 = rand(1,5);
        $p3 = rand(1,5);
        if($p1 == 3){
            $p1 = ":)";
        }
        if($p2 == 3){
            $p2 = ":)";
        }
        if($p3 == 3){
            $p3 = ":)";
        }
        if( ($p1 == ":)")&&($p2 == ":)")&&($p3 == ":)") ){
            echo "<div class=\"bg1\"><h1>Glavni dobitak +100$</h1>";
            echo "<div class=\"slotovi\"><h2>$p1</h2> <h2>$p2</h2> <h2>$p3</h2></div>";
            echo "<div class=\"buton\"><a href=\"slot.php\" alt=\"Refresh\">OKRENI</a></div></div>";
            $img = 1;
        }else if( 
        ( ($p1 == ":)") && ($p2 == ":)") )
        ||
        ( ($p1 == ":)") && ($p3 == ":)") )
        ||
        ( ($p2 == ":)") && ($p3 == ":)") ) 
        ){
            echo "<div class=\"bg2\"><h1>Dobitak +10$</h1>";
            echo "<div class=\"slotovi\"><h2>$p1</h2> <h2>$p2</h2> <h2>$p3</h2></div>";
            echo "<div class=\"buton\"><a href=\"slot.php\" alt=\"Refresh\">OKRENI</a></div></div>";
        }else if(($p1 == $p2)&&($p2 == $p3)){
            echo "<div class=\"bg3\"><h1>Tri ista broja +7$</h1>";
            echo "<div class=\"slotovi\"><h2>$p1</h2> <h2>$p2</h2> <h2>$p3</h2></div>";
            echo "<div class=\"buton\"><a href=\"slot.php\" alt=\"Refresh\">OKRENI</a></div></div>";
        }else if(
            (($p1 == $p2) || ($p2 == $p3) || ($p1 == $p3))) {
            echo "<div class=\"bg4\"><h1>Najmanji dobitak... +1$</h1>";
            echo "<div class=\"slotovi\"><h2>$p1</h2> <h2>$p2</h2> <h2>$p3</h2></div>";
            echo "<div class=\"buton\"><a href=\"slot.php\" alt=\"Refresh\">OKRENI</a></div></div>";
        }else{
            echo "<div class=\"bg4\"><h1>Nema dobitka...</h1>";
            echo "<div class=\"slotovi\"><h2>$p1</h2> <h2>$p2</h2> <h2>$p3</h2></div>";
            echo "<div class=\"buton\"><a href=\"slot.php\" alt=\"Refresh\">OKRENI</a></div></div>";
        }
        -->
<head>
<meta charset="utf-8">
	<title>Slotovi</title>
</head>
<style>
body {
	padding: 0;
	margin: 0;
}
h1 {
    text-align: center;
    padding-top: 32px;
    color: #fff;
    font-size: 20px;
}
a {
    font-style: normal;
    font-weight: bold;
    color: white;
    background: #04ae04;
    text-decoration: blink;
    font-family: sans-serif;
    padding: 16px 12px 13px 12px;
    border-radius: 5px;
}
a:hover {
    color: #04ae04;
    background: white;
}
#loto {
	width: 406px;
	height: 407px;
}
.slotovi {
    display: table;
    padding-top: 12px;
    margin-left: 5px;
}
.buton {
    float: right;
    margin-top: 130px;
    margin-right: 37px;
}
.bg1 {
    background: url(bg.gif);
    width: 406px;
    height: 407px;
    padding-top: 1px;
}

.bg1 h2 {
    text-align: center;
    padding-top: 43px;
    color: red;
    text-shadow:1px 1px 5px #000;
    font-size: 33px;
    float: left;
    margin-right: 5px;
    margin-left: 84px;

}
.bg2 {
    background: url(bg2.gif);
    width: 406px;
    height: 407px;
    padding-top: 1px;
}
.bg2 h2 {
    text-align: center;
    padding-top: 43px;
    color: blue;
    text-shadow:1px 1px 5px #000;
    font-size: 33px;
    float: left;
    margin-right: 5px;
    margin-left: 84px;
}
.bg3 {
    background: url(bg3.gif);
    width: 406px;
    height: 407px;
    padding-top: 1px;
}
.bg3 h2 {
    text-align: center;
    padding-top: 43px;
    color: yellow;
    text-shadow:1px 1px 5px #000;
    font-size: 33px;
    float: left;
    margin-right: 5px;
    margin-left: 84px;
}
.bg4 {
    background: url(bg4.jpg);
    width: 406px;
    height: 407px;
    padding-top: 1px;
}
.bg4 h2 {
    text-align: center;
    padding-top: 43px;
    color: #ccc;
    text-shadow:1px 1px 5px #000;
    font-size: 33px;
    float: left;
    margin-right: 5px;
    margin-left: 84px;
}
</style>
<body>
	<div id="loto">
	<div class="bg4"><h1>Nema dobitka...</h1><div class="slotovi"><h2>4</h2> <h2>:)</h2> <h2>5</h2></div><div class="buton"><a href="slot.php" alt="Refresh">OKRENI</a></div></div>	</div>
</body>
</html>

