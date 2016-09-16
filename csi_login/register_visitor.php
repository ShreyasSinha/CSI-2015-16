<?php
//register visitor
ob_start();
require_once 'core/init.php';

//$_SESSION["visitor"]=1;   
//Redirect::to('../index.php');   

if(Input::exists()) {
	$url="";
	
	if (isset($_POST["name"])&&$_POST["name"]!="") {
		if (strlen($_POST["name"])>=50) {
			$url=$url."1";
		}
		else{
			$url=$url."2";
		}
	}
	else{
		$url=$url."3";
	}

	if (isset($_POST["phone"])&&$_POST["phone"]!="") {
		if (strlen($_POST["phone"])>=15) {
			$url=$url."1";
		}
		else{
			$url=$url."2";
		}
	}
	else{
		$url=$url."3";
	}

	if (isset($_POST["email"])&&$_POST["email"]!="") {
		if (strlen($_POST["email"])>=100) {
			$url=$url."1";
		}
		else{
			$url=$url."2";
		}
	}
	else{
		$url=$url."3";
	}

	if ($url==="222") {
		//$dbh = new PDO('mysql:host=localhost;dbname='.$GLOBALS['config']['db'], $GLOBALS['config']['username'], $GLOBALS['config']['password']);
		 $dbh = new PDO("mysql:host=localhost;dbname=lr1","root","password");
		//$dbh = new PDO("mysql:host=localhost;dbname=phoenix","csi2k15","qwerty107");
		
		$stmt = $dbh->prepare("INSERT INTO visit (name,phone,email) VALUES (:name, :phone,:email)");
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':phone', $phone);
		$stmt->bindParam(':email', $email);

	// insert one row
$name = $_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];

echo $name;echo $phone;echo $email;

$stmt->execute();
$_SESSION["visit"]=1;
		Redirect::to('../index.php');
		
	}
	else{
		$url='../index.php?msg='.$url;
	Redirect::to($url);
	}
}
// else{
// 	Redirect::to('../index.php?msg=000');   
// }
// if(Input::exists()) {
//   	$validate = new Validate();
// 	$validation = $validate->check($_POST, array(
// 		'name' => array(
// 			'required' => true,
// 			'min' =>2,
// 			'max' => 50
// 			),
// 		'email' => array(
// 			'required' => true,
// 			'min' =>2,
// 			'max' => 50
// 			),
// 		'phone' => array(
// 			'required' => true,
// 			'min' =>6,
// 			'max' => 15
// 			)

// 		));
// if($validation->passed()){
// 	echo "baba";
// }
// 	if($validation->passed()) {
 
// 		$_SESSION["visitor"]=1;           
//         Redirect::to('index.php');    
//     } 
              
// } else {
// 		Redirect::to('../index.php?i=1');    
    
// 	}
// }
// Redirect::to('../index.php?i=2');    
?>