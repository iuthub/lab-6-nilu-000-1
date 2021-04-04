<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	<style>
	.is-invalid{
		border: 1px solid red;
	}
	</style>
	<?php
		$isNameValid = preg_match("^/[a-z]{2,}$/i", $name);
		$isEmailValid = preg_match("/\w@\w\.\w/g", $email);
		$isUsernameValid = preg_match("/\w{5,}/g", $username);
		$isPasswordValid = preg_match("/\w{8,}/g", $password);
		if ($password == $confirm_password){
			$isPasswordConfirmed = true;
		}
		$isDoBValid = preg_match("/\d{2}\.\d{2}\.\d{4}\./g", $dateOfBirth);
		$isAddressValid = isset($address);
		$isCityValid = isset($city);
		$isPostCodeValid = preg_match("/\d{6}/g", $postCode);
		$isHomePhoneValid = preg_match("/\d{9}/g", $homePhone);
		$isMobileValid = preg_match("/\d{9}/g", $mobile);
		$isCreditCardValid = preg_match("/\d{16}/g", $creditCard);
		$isCreditExpiryValid = preg_match("/\d{2}\.\d{2}\.\d{4}\./g",$creditExpiry);
		$isSalaryValid = preg_match("/^uzs \d\.\d$/gi", $salary);
		$isGPAValid = preg_match("/[0-4]\.[0-9]+/g", $gpa);
	?>
	<body>
		<h1>Registration Form</h1>

		<p>
			This form validates user input and then displays "Thank You" page.
		</p>
		
		<hr />
		
		<h2>Please, fill below fields correctly</h2>
		<dl>
			<dt>Name</dt>
			<dd>
				<input class=<?= $isNameValid ? '' : 'is-invalid' ?> type="text" name="name" value=<?= $name ?> required>
			</dd>

			<dt>Email</dt>
			<dd>
				<input class=<?= $isEmailValid ? '' : 'is-invalid' ?> type="text" name="email" value=<?= $email ?> required>
			</dd>

			<dt>Username</dt>
			<dd>
				<input class=<?= $isUsernameValid ? '' : 'is-invalid' ?> type="text" name="username" value=<?= $username ?> required>
			</dd>

			<dt>Password</dt>
			<dd>
				<input class=<?= $isPasswordValid ? '' : 'is-invalid' ?> type="password" name="password" value=<?= $password ?> required>
			</dd>
			<dt>Confirm Password</dt>
			<dd>
				<input class=<?= $isPasswordConfirmed ? '' : 'is-invalid' ?> type="password" name="confirm_password" value=<?= $confirm_password ?> required>
			</dd>

			<dt>Date of Birth</dt>
			<dd>
				<input class=<?= $isDoBValid ? '' : 'is-invalid' ?> type="dateOfBirth" name="dateOfBirth" value=<?= $dateOfBirth ?> required>
			</dd>

			<dt>Gender</dt>
			<dd>
				<input type="radio" id="male" name="gender" value="male">
				<label for="male">Male</label><br>
				<input type="radio" id="female" name="gender" value="female">
				<label for="female">Female</label><br>
			</dd>

			<dt>Marital Status</dt>
			<dd>
				<input type="radio" id="single" name="marital" value="single">
				<label for="single">Male</label><br>
				<input type="radio" id="married" name="marital" value="married">
				<label for="married">Female</label><br>
				<input type="radio" id="divorder" name="marital" value="divorder">
				<label for="divorder">Female</label><br>
				<input type="radio" id="widowed" name="marital" value="widowed">
				<label for="widowed">Female</label><br>
			</dd>

			<dt>Address</dt>
			<dd>
			<input class=<?= $isAddressValid ? '': 'is-invalid'?> type="text" name="address" value=<?= $address?> required>
			</dd>

			<dt>City</dt>
			<dd>
			<input class=<?= $isCityValid ? '': 'is-invalid'?> type="text" name="city" value=<?= $city?> required>
			</dd>

			<dt>Postal Code</dt>
			<dd>
			<input class=<?= $isPostCodeValid ? '': 'is-invalid'?> type="text" name="postCode" value=<?=$postCode?> required>
			</dd>

			<dt>Home Phone</dt>
			<dd>
			<input class=<?= $isHomePhoneValid ? '': 'is-invalid'?> type="text" name="homePhone" value=<?=$homePhone?> required>
			</dd>

			<dt>Mobile Phone</dt>
			<dd>
			<input class=<?= $isMobileValid ? '': 'is-invalid'?> type="text" name="mobile" value=<?=$mobile?> required>
			</dd>

			<dt>Credit Card Number</dt>
			<dd>
			<input class=<?= $isCreditCardValid ? '': 'is-invalid'?> type="text" name="creditCard" valu=<?=$creditCard?> required>
			</dd>

			<dt>Credit Card Expiry Date</dt>
			<dd>
			<input class=<?= $isCreditExpiryValid ? '': 'is-invalid'?> type="text" name="creditExpiry" value=<?=$creditExpiry?> required>
			</dd>

			<dt>Monthly Salary</dt>
			<dd>
			<input class=<?= $isSalaryValid ? '': 'is-invalid'?> type="text" name="salary" value=<?=$salary?> required>
			</dd>

			<dt>Overall GPA</dt>
			<dd>
			<input class=<?= $isGPAValid ? '': 'is-invalid'?> type="text" name="gpa" value= <?=$gpa?>>
			</dd>

			<dt></dt>
			<dd>
			<input type="submit" value="Submit">
			</dd>
			
			<!-- Write other fiels similar to Name as specified in lab6.pdf -->
		</dl>
		
	</body>
</html>