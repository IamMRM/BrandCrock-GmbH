<html>
<head>
	<title>Hello PHP</title>
</head>
<body>

<?php
echo "<h1> SUBMITTED DATA IS AS FOLLOWS </h1>";

$roll = $_POST["rollno"];
$name=$_POST["name"];
$father=$_POST["father"];


echo "Hello ".$name;
echo "<br>";

if(isset($_POST['submit'])){
$selected_val = $_POST['Color'];
echo "Class of :" .$selected_val;
}
echo "<br>";

if (isset($_POST['submit'])) {
if(isset($_POST['gender']))
{echo "Your Gender is :".$_POST['gender'];
echo "<br>";}}

echo "With Roll number ".$roll."\n";
echo "<br>";
echo "Father name ".$father."\n";
echo "<br>";

if(isset($_POST['pic'])){
$selected_val = $_POST['pic'];
echo "Picture name is :" .$selected_val;
}
echo "<br>";
if(isset($_POST['doc'])){
$selected_val = $_POST['doc'];
echo "Document to upload is :" .$selected_val;
}

?>

</body>
</html>