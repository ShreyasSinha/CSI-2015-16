<?php
ob_start();
require_once 'core/init.php';

if(Input::exists()) {
  
if(Token::check(Input::get('token'))){

	$validate = new Validate();
	$validation = $validate->check($_POST, array(
		'username' => array(
			'required' => true,
			'min' => 2,
			'max' => 20,
			'unique' => 'users'
			),
		'password' => array(
			'required' => true,
			'min' => 6
			),
		'password_again' => array(
			'required' => true,
			'matches' => 'password'
			),
		'name' => array(
			'required' => true,
			'min' =>2,
			'max' => 50
			)

		));

	if($validation->passed()) {
 
           $user= new User();

        //    $salt = Hash::salt(32);
             $salt="";
           

           try { 
               $user->create(array(
                   'username' => Input::get('username'),     
                   'password' => Hash::make(Input::get('password'),$salt),    
                   'salt' => $salt,    
                   'name' => Input::get('name'),    
                   'joined' => date('Y-m-d H:i:s'),
                   'group' => 1
                ));

               Session::flash('home','You have been registered and can log in!');
               Redirect::to('index.php');    
                  
               

           } catch(Exception $e) {
                die($e->getMessage());
           }
              
	} else {
		foreach($validation->errors() as $error) {
			echo $error, '<br>';
		}
	}
   }
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css_login/bootstrap.min.css" rel="stylesheet">
    <link href="css_login/styles.css" rel="stylesheet">
</head>
<div class="welcome">
<center><span class="txt_darkgrey">Welcome to </span><span class="txt_orange">CSI-DTU</span></center>
</div>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
      	
        <div class="panel panel-default">
           <div class="panel-heading"> 
            <strong><center><div class="white">Register</div></center></strong></div>
       
              <div class="panel-body"> 
              <form class="form-horizontal" action="register1.php" method="post">
				<div class ="form-group">
				  <label for="username" class="col-sm-5 control-label"><center>Username</center></label>
					<div class="col-sm-7">
					   <input type ="text" name="username" id="username"  class="form-control" placeholder="Your Username" value="<?php echo escape(Input::get('username')); ?>" autocomplete ="off">
				    </div>
				</div>
		      
				<div class ="form-group">
				  <label for="password" class="col-sm-5 control-label"><center>Choose a password</center></label>
					<div class="col-sm-7">
					   <input type="password" name="password" id="password" class="form-control" placeholder="Password">
				    </div>
				</div>
		        
				<div class = "form-group">
				  <label for="password_again" class="col-sm-5 control-label"><center>Enter password again</center></label>
					<div class="col-sm-7">
				       <input type="password" name="password_again" id="password_again" class="form-control" placeholder="Password">
				    </div>
				</div>

				<div class = "form-group">
				  <label for="name" class="col-sm-5 control-label"><center>Your name</center></label>
                    <div class="col-sm-7"> 
					  <input type="text" name="name" class="form-control" placeholder="Your Name"  value="<?php echo escape(Input::get('name')); ?>" id="name">
				    </div>
				</div>
		        <br>
		        <div class="form-group last">
                  <div class="col-md-offset-4 col-sm-9">
			        <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
				<button type="submit" class="btn btn-success btn-sm"><strong>Register</strong></button>
				  </div>
                </div>	
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>