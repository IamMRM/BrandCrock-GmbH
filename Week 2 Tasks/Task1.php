<!DOCTYPE html>
<html>
<head>
	<title id="bla">Muhammad Roshan Mughees</title>
</head>
<style>
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
h1 {
  color: red;
  font-family: verdana;
  font-size: 200%;
}
input[type=submit] {
  background-color: #FF0000;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #808000;
}
div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>
	<H1>Home Task 1 by Muhammad Roshan Mughees</H1>
	<div>
	<form action="Task2.php" method="post">
  		<p>Roll No:</p><input type="text" name="rollno" required><br>
  		<p>Name:</p><input type="text" name="name" required><br>
  		<p>Father Name:</p><input type="text" name="father" required><br>
  		<p  style="size: 5%;">Class:	<br>
      <select name="Color">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>

</p>



		<p><b>Gender:</b>
		<input type="radio" name="gender" value="male"> Male
  		<input type="radio" name="gender" value="female"> Female<br>
      
    </p>

  		<p><b>Upload Picture:</b></p>
      <input type="file" name="pic">
  		<p><b>Upload Document:</b></p>
  		<input type="file" name="doc">
      <br><br>
      <input type="submit" name="submit" value="Submit the form" />
	</form>

	<button onclick="myFunction()">Alert</button>

	<script>
	function myFunction() {
	 alert("Register form save");
	}</script>
</div>
</body>
</html>