<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<form method="get">
	<table>
	     
		<tr>
			<td>Email</td>
			<td><input type="email" name="email" placeholder="Enter your Email"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"placeholder="Enter your Password"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="Submit" value="submit"></td>
		</tr>
	</table>
	</form>
	<a href="{{route("Registration")}}"> Signup</a>
</body>
</html>