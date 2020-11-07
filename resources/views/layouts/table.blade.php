<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<style>
th {
	border: 1px solid black;
	width: 250px;
	text-align: center;
}
td {
	text-align: center;

	border: 1px solid black;
	font-weight: bold;
	}
</style>	
<body>
	<table>
		<tr>
			<th>name</th>
			<th>Last name</th>
			<th>Address</th>
			<th>Biography</th>
			<th>Date of Birth</th>
		</tr>
		<tr>
			@foreach ($newdata as $data)
				<td>{{ $data }}</td>
			@endforeach
			
		</tr>
	</table>
</body>
</html>