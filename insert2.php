<?php
include "db_connect.php";
if(isset($_POST['Submit']))
{
	$id = $_POST['id'];
	$name = $_POST['name'];
	$age = $_POST['age'];

	$sql ="INSERT INTO 'practical' ('id','name','age') VALUES ('$id','$name','$age')"; 
	$result = $conn->query($sql);
	if($result==True)
	{
		echo "Successful";
	}
	else
	{
		echo "Error";
	}
	$conn->close();
}
?>

<!DOCTYPE html>
<html>
<body>
	<form action="" methods="POST">
		ID: <input type="number" name="id" value="id">
		<br>
		Name: <input type="text" name="name" value="name">
		<br>
		Age: <input type="number" name="age" value="age">
		<br>
		<input type="submit" name="submit" value="submit">
	</form>	
</body>
</html>