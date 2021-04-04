<?php

	$pattern="";
	$text="";
	$replaceText="";
	$replacedText="";

	$message = "";

	$match="Not checked yet.";

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$pattern=$_POST["pattern"];
	$text=$_POST["text"];
	$replaceText=$_POST["replaceText"];

	$replacedText=preg_replace($pattern, $replaceText, $text);

	if(preg_match($pattern, $text)) {
						$match="Match!";
					} else {
						$match="Does not match!";
					}
	
	if (preg_match($pattern . "g", $text)){
		$message = $message . "Global search matches \n";
	}
	if (preg_match("/.+@.+\..+/g", $text)){
		$message = $message . "Email search matches \n";
	}
	if (preg_match("//+998/-\d{2}-\d{3}-\d{4}/", $text)){
		$message = $message . "Phone number search matches \n";
	}
	
	$no_space = preg_replace("/\s/g", $text, "");
		$message = $message . "String without whitespaces: " . $no_space;
	

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Valid Form</title>
</head>
<body>
	<form action="regex_valid_form.php" method="post">
		<dl>
			<dt>Pattern</dt>
			<dd><input type="text" name="pattern" value="<?= $pattern ?>"></dd>

			<dt>Text</dt>
			<dd><input type="text" name="text" value="<?= $text ?>"></dd>

			<dt>Replace Text</dt>
			<dd><input type="text" name="replaceText" value="<?= $replaceText ?>"></dd>

			<dt>Output Text</dt>
			<dd><?=	$match ?></dd>

			<dt>Replaced Text</dt>
			<dd> <code><?=	$replacedText ?></code></dd>
			
			<dt>&nbsp;</dt>
			<dd><input type="submit" value="Check"></dd>
		</dl>
	</form>
	<p>
	<?= $message ?>
	</p>
</body>
</html>
