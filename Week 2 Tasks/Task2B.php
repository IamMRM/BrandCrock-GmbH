<!DOCTYPE html>
<html>
<head>
	<title>LOOPS</title>
</head>
<body>


<?php

$name_one = array("Roshan", "is", "a", "wolf"); 
echo "Looping using foreach: \n";
foreach ($name_one as $val){
    echo $val. "\n";
}
echo "<br>";

for($i = 1; $i<=10; $i++) {
    echo "Number ".$i;
    echo "<br>";
}

for($i = 1; $i<=10; $i++) {
    echo "2 x ".$i." = ";
    echo 2*$i;
    echo "<br>";
}

$num =5;
for($i = 4; $i>=1; $i--){
	$num *=$i;
    echo "Factorial is ".$num;
    echo "<br>";
}

$sum = 0;
$str = array("1","2","3","4","5","6","7");
foreach ($str as $i){
	$sum+=(int)$i;
}
echo "Sum of the values is ".$sum;
echo "<br>";

$a = 10; 
$b= 10;
$c = $a.$b;
echo "The result of $a and $b is ".$c;
echo "<br>";



echo "<form method='post'><p>Name:</p><input type='text' name='name' required><input type='submit' name='submit'><br></form>";
if (isset($_POST['submit'])) {
if(isset($_POST['name']))
{echo "Your name is : ".$_POST['name'];
echo "<br>";}}


echo "END of Week 2";
?>
</body>
</html>