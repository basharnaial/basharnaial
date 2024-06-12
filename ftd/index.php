<?php
if(isset($_POST['sub'])){
	require "consn.php";

	$fname = $_POST ['fname'];
	$lname = $_POST ['lname'];
	$email = $_POST ['email'];
	$age = $_POST ['age'];

	$stmt = $db->prepare("INSERT INTO custm(fname,lname,email,age,date)
		VALUES(:f,:l,:e,:a,now())");
	$stmt->execute(array(
	'f' => $fname,
	'l' => $lname,
	'e' => $email,
	'a' => $age
));
)

}
?>

<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
	<title>
		
		form
	</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='Post'>
		<input type="text" name="fname" placeholder="first name">
		<input type="text" name="lname" placeholder="last name">
		<input type="text" name="email" placeholder="email">
		<input type="number" name="age" placeholder="age">
		<input type="submit" name="sub" value='ارسال'>

	</form>

</body>
</html>