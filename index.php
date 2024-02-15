<body>
<h2>Users</h2>
<br><br>
<div>
<form name="form" action="./insert.php"  method="POST" onsubmit="return validation()">  
  User Name: <input type="text" name="username"  required>
  <br><br>
  E-mail: <input type="text" name="email"required>
  
  <br><br>
  Password: <input type="password" name="password"  required>

  <br><br>
  Birth Date: <input type="text" name="birthdate"  required>
  
  <br><br>
  Phone Number: <input type="text" name="phone"  required>
 
  <br><br>
  URL: <input type="text" name="url" required>
  
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</div>
<script src="js.js"></script>
</body>