<!DOCTYPE html>
<html>
<head>
	<title>Reporting File</title>
</head>
	<body>
		<form method="POST" action="/report" enctype="multipart/form-data">
			{{csrf_field()}}
			<input type="text" name="name">
			<input type="file" name="picture">
			<button type="submit">Test</button>
		</form>
	</body>
</html>
