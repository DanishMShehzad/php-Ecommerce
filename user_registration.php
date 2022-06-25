

<?php 
include('connection.php');
$email = $_POST['email'];
$password= $_POST['password'];
$Re_enter_password= $_POST['Re_enter_password'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];


// print_r($_POST);

//$file = '';
//if (isset($_FILES['file']) AND $_FILES['file']['error'] == 0) {
	//$upload_dir = 'upload/';
	//$name = str_replace(' ', '-', $_FILES['file']['name']);
	//move_uploaded_file($_FILES['file']['tmp_name'], $upload_dir.$name);
	//$file = $upload_dir.$name;




$sql=$conn->prepare("INSERT INTO `user_registration` (`email`, `password`, `first_name`, `last_name` ) VALUES ( ?,?,?,?)");
$sql->bind_param("ssss",$email,$password, $first_name ,$last_name);
$sql->execute();


echo " Done Successfull";

$conn->close();



 if ($password == $Re_enter_password) {
 	$_SESSION['is_login'] = 1;
	Header('Location: http://localhost/Danish_Shehzad/index.php');
}else{
	Header('Location: http://localhost/Danish_Shehzad/login.php?error=email+password incorrect');
}

die;
?>