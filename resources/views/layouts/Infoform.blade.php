<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}



</style>

<body>
	<div>
	<form action="{{ route("post") }}" method="POST">
		

        @csrf
		<label for="fname">First Name</label>
		<input type="text" name="name">

		<label for="lastname">Last Name</label>
		<input type="text" name="lastname">

		<label for="address">Address</label>
		<input type="text" name="address">

		<label for="bio">Biography</label>
		<input type="textarea" name="bio">

		<label for="birthday">Birthday:</label>
		<input type="date" name="birthday">

		<input type="submit" value="Submit">
	</form>
	</div>
</body>
</html>