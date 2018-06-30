<form method="post" action="personalProfileCheck.php" >
<head>
<title></title>
</head>
<body>
<center>
<table align="center" border="1" cellspacing="1" cellpadding="1" width="40%"height="40%">
<tr align="center">
<td colspan="3">Person profile</td></tr>
</tr>
<tr >
<td>Name</td>
<td><input name="name" type="textbox" size="20" value="<?php error_reporting(0); $_POST['name']; ?>"></td>
<td><br/></td>
</tr>
<tr>
<td>Email</td>
<td>
<input name="email" type="textbox" size="20" value="<?= $_POST['email']; ?>">
<abbr title="hint: sample@example.com"><b>i</b></abbr>
</td>
<td><br/></td>
</tr>
<tr>
<td>Gender</td>
<td>
<input name="gender" type="radio" value="Male"  <?php error_reporting(0); if($_POST['gender']=='Male'){echo "checked";} ?>>Male
<input name="gender" type="radio" value="Female" <?php error_reporting(0); if($_POST['gender']=='Female'){echo "checked";} ?>>Female
<input name="gender" type="radio" value="Other" <?php error_reporting(0); if($_POST['gender']=='Other'){echo "checked";} ?>>Other
<td/>
</tr>
<tr>
<td>Date of Birth</td>
<td>
<input type="text" size="2" name="day" value="<?= $_POST['day']; ?>">/
<input type="text" size="2" name="month" value="<?= $_POST['month']; ?>">/
<input type="text" size="4" name="year" value="<?= $_POST['year']; ?>">
<font size="2"><i>(dd/mm/yyyy)</i></font>
</td>
<td><br/>
</td>
</tr>
<tr>
<td>Blood Group</td>
<td>
<select name="BG">
<option value="">Select</option>
<option value="A+" <?= ($_POST['BG'] == "1")? "selected":"";?>>A+</options>
<option value="B+" <?= ($_POST['BG'] == "2")? "selected":"";?>>B+</options>
<option value="AB+" <?= ($_POST['BG'] == "3")? "selected":"";?>>AB+</options>
</select>
</td>
<td><br/></td>
</tr>
<tr>
<td>Degree</td>
<td>
<input type="checkbox" name="facilities[]" value="SSC" <?php if(isset($_POST['submit']) && isset($_POST['facilities'][0])) echo "checked" ?> >SSC
<input type="checkbox" name="facilities[]" value="HSC" <?php if(isset($_POST['submit']) && isset($_POST['facilities'][1])) echo "checked" ?> >HSC
<input type="checkbox" name="facilities[]" value="Bsc" <?php if(isset($_POST['submit']) && isset($_POST['facilities'][2])) echo "checked" ?> >Bsc
</td>
<td><br/></td>
</tr>
<tr>
<td colspan="3"><br/></td>
</tr>
<tr>
<td align="right" colspan="3">
<input type="submit" name="Submit" value="Submit">
<input type="reset" name="" value="Reset"><br/>
</td>
</tr>
</table>
</center>
</body>
</form>
