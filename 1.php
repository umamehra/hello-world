<html>
<body>
<h1>My first PHP page</h1>
<?php

$x = 5;
$y = 11;

function myTest(){
	$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $z;
echo "<br>";

function mTest() {
    static $a = 0;
    echo $a;
    $a++;
}

mTest();
echo "<br>";
mTest();
echo "<br>";
mTest();
echo "<br>";
mTest();
echo "<br>";
mTest();
echo "<br>";
mTest();
echo "<br>";
mTest();
echo "<br>";
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This " , "string " , "was " , "made ", "with multiple parameters. ";
echo "<br>";
echo "<br>";
$a = "Hello world!";
$b = "Hello world!";
echo $a;
echo "<br>";
echo $b;
echo "<br>";
echo strlen("Hello world");
echo "<br>";
echo str_word_count("Hello world!");
echo "<br>";
echo strrev("Hello world!");
echo "<br>";
echo str_replace("world" , "Dolly" , "Hello world");
echo "<br>";
 
 function sum($x , $y){
	 $z = $x +$y;
	 return $z;
 }
 echo "5 + 10 = " . sum(5,10) . "<br>";
 echo "2 + 3 = " . sum(2,3) . "<br>";
 echo "5 + 10 = " . sum(5,10) . "<br>";
 echo "<br>";
 $cars = array("volvo" , "BMW","Toyota");
 echo "I like " .$cars[0] . ", " . $cars[1] . ", " . $cars[2] . ". ";
 echo "<br>";
 $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
 echo "Ben is " . $age['Ben'] . " years old. <br>";
 echo "Peter is " . $age['Peter'] . " years old. <br>";
 echo "Joe is " .$age['Joe'] . " years old.<br>";
 
 $cars = array("Volvo" , "BMW" , "Toyoto");
	 $arrlength = count($cars);
	 
for($x = 0; $x < $arrlength; $x++){
	echo $cars[$x];
	echo "<br>";
}	

$cars = array(
array("volvo",22,18),
array("BMW",20,45),
array("Saab", 5,2),
array("Land Rover",17,16)
);
echo $cars[0][0].": In stock: ".$cars[0][1].", solid: ".$cars[0][2].". <br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", solid: ".$cars[1][2].". <br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", solid: ".$cars[2][2].". <br>";
echo "<br>";

for ($row = 0; $row < 4; $row++){
	echo "<p><b>Row number $row</b></p>";
	echo "<ul>";
	for($col = 0; $col < 3; $col++){
		echo"<li>" .$cars[$row][$col]."</li>";
	}
	echo "</ul>";
}
echo "<br>";
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("l") . "<br>";
date_default_timezone_set("America/New_York");
echo "The time is " .date("h:i:sa"). "<br>";
$d=strtotime("10:30pm April 10 1997");
echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa",$d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

  


?> 
&copy; 2010-<?php echo date("Y");?>



</body>
</html>