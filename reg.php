<?php
	
	if(isset($_GET['status'])){
		$status = $_GET['status'];

	    if($status == "nullvalue"){
			echo "Fields can't be empty";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
</head>
<body>
<form method="post" action="../data/regCheck.php" enctype="multipart/form-data" onsubmit="return validation()">
<center>
<table align="center" border="1" cellspacing="1" cellpadding="1" width="30%"height="40%">
<tr align="center">
<td colspan="3">Registration</td>
</tr>
<tr>
<td> Username:</td>
<td>
<input id="username" type="text" name="username">
<abbr title="Except . - $"><b>i</b></abbr></td>
<td> <span id="user"> </span> </td>
</tr>
<tr>
<td> Name:</td>
<td> <input id="name" type="text" name="name"></td>
<td> <span id="nam"> </span> </td>
</tr>
<tr>
<td> Password:</td>
<td> <input id="password" type="password" name="password"></td>
<td> <span id="pass"> </span> </td>
</tr>
<tr>
<td> Gender:</td>
<td>
<input name="gender" type="radio" value="Male">Male
<input name="gender" type="radio" value="Female">Female
<input name="gender" type="radio" value="Other"> Other
</td>
<td></td>
</tr>
<tr>
<td> Date of Birth:</td>
<td>
<input id="day" type="text" size="2" / name="day" value="">/
<input id="month" type="text" size="2" / name="month" value="">/
<input id="year" type="text" size="4" / name="year" value="">
<font size="2"><i>(dd/mm/yyyy)</i></font>
</td>
<td></td>
</tr>
<tr>
<td> Email:</td>
<td>
<input type="text" name="email">
<abbr title="hint: sample@example.com"><b>i</b></abbr>
</td>
<td></td>
</tr>
<tr>
<td> Pictures: </td>
<td> &nbsp;<input type="file" name="uploadfile"/></td>
<td></td>
</tr>
<tr>
<td> Type:</td>
<td>
<input name="utype" type="radio" value="admin">Admin
<input name="utype" type="radio" value="travelAgency">Travel Agency
<input name="utype" type="radio" value="user"> User
</td>
<td></td>
</tr>
<tr align="right">
<td colspan="2">
<input type="submit" name="submit" value="Register">&nbsp;
<input type="reset" name="" value="Reset">
<input type="button" name="back" value="back" onclick="window.location.href='../index.php'">
</td>
</tr>
</table></br>
<?php include_once"copyright.php"; ?>
</center>
</form>
<script>
        function validation() {
            var username = document.getElementById("username").value;
            var name = document.getElementById("name").value;
            var password = document.getElementById("password").value;
            var day = document.getElementById("day").value;
            var month = document.getElementById("month").value;
            var year = document.getElementById("year").value;
            if (username == "" || name == "" || password == "" || day == "" || month == "" || year == "" ) {
                alert("Please fill the field");
                return false;
            }
            if (username.charAt(' ') <= 0) {
                document.getElementById('user').innerHTML = "Space not allowed";
                return false;
            }
            if (name.charAt(' ') <= 0) {
                document.getElementById('nam').innerHTML = "Space not allowed";
                return false;
            }
            if ((username.length <= 2) || (username.length > 8)) {
                document.getElementById('user').innerHTML = "Invalid Username max 8 char";
                return false;
            }
            if ((name.length <= 2) || (name.length > 15)) {
                document.getElementById('nam').innerHTML = "Invalid name Max 15 char";
                return false;
            }
            if ((password.length <= 4) || (password.length > 30)) {
                document.getElementById('pass').innerHTML = "Invalid Password min 4 char";
                return false;
            }
        }

    </script>

</body>
</html>