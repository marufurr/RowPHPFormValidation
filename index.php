<?php 

$errname = $erremail = $errcomment = $errwebsite = $errgender = " ";
$name = $email = $comment = $website = $gender = " ";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST['name'])) {
		$errname = "<span style='color:red';>Name is required</span>";
	}else{
		$name = validate($_POST["name"]);
	}

	if (empty($_POST['email'])) {
		$erremail = "<span style='color:red';>Email is required</span>";
	}else{
		$email=validate($_POST["email"]);
	}

	if (empty($_POST['website'])) {
		$errwebsite ="<span style='color:red';>Website is required</span>";
	}else{
		$website =validate($_POST["website"]);
	}

	if (empty($_POST['comment'])) {
		$errcomment = "<span style='color:red';>Comment is required</span>";
	}else{
		$comment =validate($_POST["comment"]);
	}

	if (empty($_POST['gender'])) {
		$errgender = "<span style='color:red';>Gender is required</span>";
	}else{
		$gender  =validate($_POST["gender"]);
	}
}
	function validate($data){
			$data = trim($data);
			$data = htmlspecialchars($data);
			$data = stripcslashes($data);
			return $data;
		} 
			 echo "Name is: ".$name."<br/>";
			 echo "Email is: ".$email."<br/>";
			 echo "Website is: ".$website."<br/>";
			 echo "Comment is: ".$comment."<br/>";
			 echo "Gender is: ".$gender."<br/>";
			
	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Basic PHP Form Validation || With Row PHP </title>
</head>
<body style="background-color: #444; color: white;">
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
		<table>
			<p style="color:red;">Required Field</p>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name">*<?php echo $errname;?></td>
			</tr>
			<tr>
				<td>E-mail</td>
				<td><input type="email" name="email">*<?php echo $erremail;?></td>
			</tr>
			<tr>
				<td>Website</td>
				<td><input type="text" name="website">*<?php echo $errwebsite;?></td>
			</tr>
			<tr>
				<td>Comment</td>
				<td><textarea name="comment" rows="5" cols="40"></textarea>*<?php echo $errcomment;?></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" value="male">Male
					<input type="radio" name="gender" value="female">Female
					*<?php echo $errgender;?>

				</td>
			</tr>
			<tr>
				<td></td>
				  <td>
 				    <input type="submit" value="Submit">
				  	<input type="reset" value="Reset">
				  </td>
			</tr>
		</table>
	</form>
	
</body>
</html>