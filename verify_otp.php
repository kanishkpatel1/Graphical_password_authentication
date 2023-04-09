<?php
// Check if user submitted the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the submitted OTP and email from the form
  $otp = $_POST["otp"];
  $email = $_POST["email"];

  // Verify the OTP
  // Here, you would need to fetch the OTP from the database and compare it with the submitted OTP
  // If the OTPs match, set the password for the user and update the database
  // Otherwise, show an error message to the user

  // If the OTP is verified successfully, redirect the user to the login page
  header("Location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Verify OTP</title>
</head>
<body>
	<h1>Verify OTP</h1>
	<p>Please enter the OTP that was sent to your email.</p>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<label for="otp">OTP:</label>
		<input type="text" id="otp" name="otp" required><br><br>

		<input type="hidden" name="email" value="<?php echo $email; ?>">

		<input type="submit" value="Submit">
	</form>
</body>
</html>
