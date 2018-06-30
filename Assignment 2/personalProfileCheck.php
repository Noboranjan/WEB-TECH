<?php
error_reporting(0);
$name = $email = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    echo"Name required";
	echo"<br/>";
  }
  else {
$name_subject = $_POST['name'];
$name_pattern = '/^[a-zA-Z ]*$/';
preg_match($name_pattern, $name_subject, $name_matches);
if(!$name_matches[0])
echo "Only alphabets and white space allowed";
echo"<br/>";
  }
 $name_subject = $_POST['name'];
if(strlen($name_subject)!='2')
	{
echo "Must be 2 characters long";
echo"<br/>";
}

  if (empty($_POST["email"])) {
    echo"Email is required";
	echo"<br/>";
  } 
  else {
$email_subject = $_POST['email'];
$email_pattern = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';
preg_match($email_pattern, $email_subject, $email_matches);
if(!$email_matches[0])
{
echo "Must be of valid email format";
echo"<br/>";
}
	else{
	echo $_POST['email'];
    echo"<br/>";
	}
  }
  if (empty($_POST["gender"])) {
    echo"Gender is required";
	echo"<br/>";
  }
  else {
    $gender = test_input($_POST["gender"]);
	echo $gender;
  }
  if (empty($_POST["day"])) {
    echo"Day required";
	echo"<br/>";
  }
  if (empty($_POST["month"])) {
    echo"month required";
	echo"<br/>";
  }
  if (empty($_POST["year"])) {
    echo"year required";
	echo"<br/>";
  }
  if(empty($_POST['BG']))
  {
echo "You must select a Blood Group";
echo"<br/>";
}

$facilities = $_POST['facilities'];
  if(empty($facilities)) 
  {
    echo "You must select degree";
	echo"<br/>";
  } 
 
 if(!empty($_POST['facilities'])) {
    $no_checked = count($_POST['facilities']);
    if($no_checked<2)
    echo "Select at least two degree";
    }
	
}
/*print_r($_POST);
echo"<br/>";
echo $_POST['name'];
echo"<br/>";
echo $_POST['email'];*/
?>