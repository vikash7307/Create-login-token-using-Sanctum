<!DOCTYPE html>
<html>
<body>

<h2>login Forms</h2>

<form action="login" method="POST">
	@csrf
  <label for="lname">Email:</label><br>
  <input type="text" id="email" name="email" value=""><br>
  <label for="lname">Password:</label><br>
  <input type="text" id="password" name="password" value=""><br><br>
  <input type="submit" value="Submit">
</form> 


</body>
</html>