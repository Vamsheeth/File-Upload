<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upload</title>
</head>
<body>

	<form action="upload.php" method="post" enctype="multipart/form-data">
		<input type="file" name="files[]" multiple>
		<input type="submit" value="Upload">
	</form>

</body>
</html>